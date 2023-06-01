<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class UserDataController extends Controller
{
    private $folderName;
    private $userDb;

    public function __construct(){
        $this->folderName = 'penduduk.residentData';
        $this->userDb = env('DB_RESIDENT_DATABASE'). 'resident_data as userDB';
    }

    public function dashboard(Request $request){
        
        if($request->ajax()){

            $gender = UserData::all()->groupBy('JENIS_KELAMIN')->map(fn($entries) => $entries->count());

            $age = DB::connection('resident_mysql')->table('resident_data')
                    ->select(DB::raw('
                        CASE
                            WHEN UMUR <= 11 THEN "Anak Anak"
                            WHEN UMUR >= 12 AND UMUR <= 18 THEN "Remaja"
                            WHEN UMUR >= 19 AND UMUR <= 45 THEN "Dewasa"
                            WHEN UMUR > 45 THEN "Lansia"
                        END AS KATEGORI,
                        COUNT(*) as jumlah'))
                    ->groupBy('KATEGORI')
                    ->orderBy('UMUR')
                    ->get();

            $data = compact('gender', 'age');

            return $data;
        }

        $kauh = UserData::where('BANJAR', 'Kauh')->count();
        $buangga = UserData::where('BANJAR', 'buangga')->count();
        $tengah = UserData::where('BANJAR', 'tengah')->count();
        $ubud = UserData::where('BANJAR', 'ubud')->count();

        $banjar = compact('kauh', 'buangga', 'tengah', 'ubud');

        return view('admin.penduduk.index', compact('banjar'));
    }



    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = UserData::latest()
                    ->where('resident_data.NAMA', 'like', '%'.$param.'%')
                    ->orWhere('resident_data.NIK', 'like', '%'.$param.'%')
                    ->get();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.'.$this->folderName.'.index');

    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');
    }

    public function show(UserData $userData){
        return view('admin.'.$this->folderName.'.form', compact('userData'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'NAMA' => 'required',
            'TEMPAT_LAHIR' => 'required',
            'TANGGAL_LAHIR' => 'required',
            'SHDK' => 'nullable',
            'ALAMAT' => 'required',
            'NO_KK' => 'required',
            'NIK' => 'required',
            'JENIS_KELAMIN' => 'required',
            'UMUR' => 'nullable',
            'PEKERJAAN' => 'nullable',
            'KEWARGANEGARAAN' => 'nullable',
            'PENDIDIKAN' => 'nullable',
            'AKUN_MOBILE_APP' => 'nullable',
            'KETUA_RT' => 'nullable',
            'KETUA_RW' => 'nullable',
            'KETUA_BANJAR' => 'nullable',
            'RT' => 'required',
            'RW' => 'required',
            'BANJAR' => 'required',
            'STATUS_PERKAWINAN' => 'required',
            'GOLONGAN_DARAH' => 'nullable',
        ]);

        if(!empty($data['KETUA_RT'])){
            $data['KETUA_RT'] = 1;
        }
        
        if(!empty($data['KETUA_RW'])){
            $data['KETUA_RW'] = 1;
        }

        if(!empty($data['KETUA_BANJAR'])){
            $data['KETUA_BANJAR'] = 1;
        }

        try {

            UserData::create($data);

            if(!empty($data['AKUN_MOBILE_APP'])){
                UserLogin::create([
                    'no_nik' => $data['NIK'],
                    'password' => bcrypt($data['NIK']),
                    'status' => 'Active'
                ]);
            }

            $message = 'create user successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/data-penduduk/penduduk')->with('success', $message);

    }

    public function update(Request $request, UserData $userData){

        $data = $request->validate([
            'NAMA' => 'required',
            'TEMPAT_LAHIR' => 'required',
            'TANGGAL_LAHIR' => 'required',
            'SHDK' => 'nullable',
            'ALAMAT' => 'required',
            'NO_KK' => 'required',
            'NIK' => 'required',
            'JENIS_KELAMIN' => 'required',
            'UMUR' => 'nullable',
            'PEKERJAAN' => 'nullable',
            'KEWARGANEGARAAN' => 'nullable',
            'PENDIDIKAN' => 'nullable',
            'KETUA_RT' => 'nullable',
            'KETUA_RW' => 'nullable',
            'KETUA_BANJAR' => 'nullable',
            'RT' => 'required',
            'RW' => 'required',
            'BANJAR' => 'required',
            'STATUS_PERKAWINAN' => 'required',
            'GOLONGAN_DARAH' => 'nullable',
        ]);

        $data['KETUA_RT'] = isset($data['KETUA_RT']) ? 1 : 0;
        $data['KETUA_RW'] = isset($data['KETUA_RW']) ? 1 : 0;
        $data['KETUA_BANJAR'] = isset($data['KETUA_BANJAR']) ? 1 : 0;

        try {
            UserData::find($userData->id)->update($data);
            $message = 'update user successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/data-penduduk/penduduk')->with('success', $message);

    }

    function destroy(UserData $userData){

        $data = UserData::find($userData->id);

        try {
            $data->delete();
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
        ]);
    }

    public function createMobileAccount(UserData $userData){

        try {

            UserLogin::create([
                'no_nik' => $userData['NIK'],
                'password' => bcrypt($userData['NIK']),
                'status' => 'Active',
                'fcm' => $userData['NIK'] . time() * rand(1,1000)
            ]);

            UserData::find($userData->id)->update(['AKUN_MOBILE_APP' => true]);
            $message = 'create user mobile account successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/data-penduduk/penduduk')->with('success', $message);

    }

    public function changeStatusMobileAccount(UserData $userData){

        try {
            if($userData->AKUN_MOBILE_APP == 1){
                UserData::find($userData->id)->update(['AKUN_MOBILE_APP' => false]);
                $user = UserLogin::where('no_nik', '=', $userData->NIK)->delete();
            } else {
                UserData::find($userData->id)->update(['AKUN_MOBILE_APP' => true]);
                $token = 
                UserLogin::create([
                    'no_nik' => $userData['NIK'],
                    'password' => bcrypt($userData['NIK']),
                    'status' => 'Active',
                ]);
            }
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
        ]);

    }

    public function getFamilyData(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = UserData::select('NAMA')->distinct('NO_KK')
                    ->where('resident_data.NAMA', 'like', '%'.$param.'%')
                    ->orWhere('resident_data.NIK', 'like', '%'.$param.'%')
                    ->get();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.penduduk.family.index');


    }

    // public function generateToken(User){
    //     return $request->token;
    // }

}
