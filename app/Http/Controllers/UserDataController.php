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
        
        $gender = UserData::all()->groupBy('jenis_kelamin')->map(fn($entries) => $entries->count());

        $age = DB::connection('resident_mysql')->table('resident_data')
                ->select(DB::raw('
                    CASE
                        WHEN YEAR(NOW()) - YEAR(TANGGAL_LAHIR) <= 11 THEN "Anak Anak"
                        WHEN YEAR(NOW()) - YEAR(TANGGAL_LAHIR) >= 12 AND YEAR(NOW()) - YEAR(TANGGAL_LAHIR) <= 18 THEN "Remaja"
                        WHEN YEAR(NOW()) - YEAR(TANGGAL_LAHIR) >= 19 AND YEAR(NOW()) - YEAR(TANGGAL_LAHIR) <= 45 THEN "Dewasa"
                        WHEN YEAR(NOW()) - YEAR(TANGGAL_LAHIR) > 45 THEN "Lansia"
                    END AS KATEGORI,
                    COUNT(*) as jumlah'))
                ->groupBy('KATEGORI')
                ->orderBy('KATEGORI')
                ->get();

        $kauh = UserData::where('BANJAR', 'Kauh')->count();
        $buangga = UserData::where('BANJAR', 'buangga')->count();
        $tengah = UserData::where('BANJAR', 'tengah')->count();
        $ubud = UserData::where('BANJAR', 'ubud')->count();

        $rawResidentJobs = DB::connection('resident_mysql')
                    ->table('resident_data')
                    ->select('pekerjaan', DB::raw('COUNT(*) as jumlah'))
                    ->orderBy('jumlah', 'ASC')
                    ->groupBy('pekerjaan')
                    ->get()
                    ->toArray();

        list($residentJob_1, $residentJob_2, $residentJob_3, $residentJob_4) = array_chunk($rawResidentJobs, count($rawResidentJobs) / 4);

        $residentJobs = [$residentJob_1, $residentJob_2, $residentJob_3, $residentJob_4];

        $education = DB::connection('resident_mysql')
                    ->table('resident_data')
                    ->select('pendidikan', DB::raw('COUNT(*) as jumlah'))
                    ->orderBy('jumlah')
                    ->groupBy('pendidikan')
                    ->get()
                    ->toArray();

        $banjar = compact('kauh', 'buangga', 'tengah', 'ubud');

        return view('admin.penduduk.index', compact('banjar', 'gender', 'age', 'residentJobs', 'education'));
    }



    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = UserData::latest()
                    ->where('resident_data.nama', 'like', '%'.$param.'%')
                    ->orWhere('resident_data.no_nik', 'like', '%'.$param.'%')
                    ->get();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.'.$this->folderName.'.index');

    }

    public function create(){
        return view('admin.'.
        $this->folderName.'.form');
    }

    public function show($id){
        $user = UserData::selectRaw('*,YEAR(NOW()) - YEAR(TANGGAL_LAHIR) as UMUR')->find($id); 
        if($user->status_perkawinan == 'Kawin Tercatat' || $user->status_perkawinan == 'Kawin' || $user->status_perkawinan == 'Kawin Belum Tercatat'){

            $couple  = UserData::where('no_kk', $user->no_kk)
                        ->where('shdk', '!=', $user->shdk)
                        ->where('shdk', '!=', 'ANAK')
                        ->first();

            $children  = UserData::where('no_kk', $user->no_kk)
                        ->where('shdk', 'ANAK')
                        ->get();
        }
        return view('admin.'.$this->folderName.'.form', ['user' => $user, 'couple' => $couple ?? null , 'children' => $children ?? null]);
    }

    public function store(Request $request){

        $data = $request->all();

        if(!empty($data['ketua_RT'])){
            $data['ketua_RT'] = 1;
        }
        
        if(!empty($data['ketua_RW'])){
            $data['ketua_RW'] = 1;
        }

        if(!empty($data['ketua_banjar'])){
            $data['ketua_banjar'] = 1;
        }

        try {

            UserData::create($data);

            if(!empty($data['akun_mobile_app'])){
                UserLogin::create([
                    'no_nik' => $data['no_nik'],
                    'password' => bcrypt($data['no_nik']),
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

        $data = $request->all();

        if(empty($data['status_mutasi'])){
            $data['status_mutasi'] = null;
        }

        $data['ketua_RT'] = isset($data['ketua_RT']) ? 1 : 0;
        $data['ketua_RW'] = isset($data['ketua_RW']) ? 1 : 0;
        $data['ketua_banjar'] = isset($data['ketua_banjar']) ? 1 : 0;

        if($data['no_kk'] != $userData->no_kk){
            UserData::where('no_kk', $userData->no_kk)->update(['no_kk' => $data['no_kk']]);
        }

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
                'no_nik' => $userData['no_nik'],
                'password' => bcrypt($userData['no_nik']),
                'status' => 'Active',
                'fcm' => $userData['no_nik'] . time() * rand(1,1000)
            ]);

            UserData::find($userData->id)->update(['akun_mobile_app' => true]);
            $message = 'create user mobile account successfully';
        } catch (\Exception $e) {
            $message = $e->getMessage();
        }

        return redirect('/data-penduduk/penduduk')->with('success', $message);

    }

    public function changeStatusMobileAccount(UserData $userData){

        try {
            if($userData->akun_mobile_app == 1){
                UserData::find($userData->id)->update(['akun_mobile_app' => false]);
                $user = UserLogin::where('no_nik', '=', $userData->no_nik)->delete();
            } else {
                UserData::find($userData->id)->update(['akun_mobile_app' => true]);
                UserLogin::create([
                    'no_nik' => $userData['no_nik'],
                    'password' => bcrypt($userData['no_nik']),
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

            $data = UserData::select('NAMA')->distinct('no_kk')
                    ->where('resident_data.NAMA', 'like', '%'.$param.'%')
                    ->orWhere('resident_data.NIK', 'like', '%'.$param.'%')
                    ->get();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.penduduk.family.index');


    }

    public function userDataForSelectOption(Request $request){
        $query = $request->query('query');
        $userData = UserData::where('nama', 'like', '%'.$query.'%')
                ->orWhere('no_nik', 'like', '%'.$query.'%')->get();
        return response()->json(['items'=>$userData]);
    }

    // public function generateToken(User){
    //     return $request->token;
    // }

}
