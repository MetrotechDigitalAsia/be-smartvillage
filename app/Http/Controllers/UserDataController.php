<?php

namespace App\Http\Controllers;

use App\Exports\DeathResidentExport;
use App\Exports\ResidentMovedDataExport;
use App\Exports\ResidentMovedOutExport;
use App\Exports\UserDataExport;
use App\Models\UserData;
use App\Models\UserLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class UserDataController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'penduduk.residentData';
    }

    public function dashboard(Request $request){
        
        $gender = UserData::all()->groupBy('jenis_kelamin')->map(fn($entries) => $entries->count());

        $age = DB::connection('resident_mysql')->table('resident_data')
                ->select(DB::raw('
                    CASE
                        WHEN YEAR(NOW()) - YEAR(TANGGAL_LAHIR) <= 10 THEN "Anak Anak"
                        WHEN YEAR(NOW()) - YEAR(TANGGAL_LAHIR) >= 11 AND YEAR(NOW()) - YEAR(TANGGAL_LAHIR) <= 19 THEN "Remaja"
                        WHEN YEAR(NOW()) - YEAR(TANGGAL_LAHIR) >= 20 AND YEAR(NOW()) - YEAR(TANGGAL_LAHIR) <= 59 THEN "Dewasa"
                        WHEN YEAR(NOW()) - YEAR(TANGGAL_LAHIR) > 59 THEN "Lansia"
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
                    ->orderBy('jumlah', 'DESC')
                    ->groupBy('pekerjaan')
                    ->get()
                    ->toArray();

        list($residentJob_1, $residentJob_2, $residentJob_3, $residentJob_4) = array_chunk($rawResidentJobs, count($rawResidentJobs) / 4);

        $residentJobs = [$residentJob_1, $residentJob_2, $residentJob_3, $residentJob_4];

        $education = DB::connection('resident_mysql')
                    ->table('resident_data')
                    ->select('pendidikan', DB::raw('COUNT(*) as jumlah'))
                    ->orderBy('jumlah', 'DESC')
                    ->groupBy('pendidikan')
                    ->get()
                    ->toArray();

        list($education_1, $education_2) = array_chunk($education, count($education) / 2);
        $educations = [$education_1, $education_2];

        $banjar = compact('kauh', 'buangga', 'tengah', 'ubud');

        $disabilityPeople = DB::connection('resident_mysql')
                            ->table('resident_data')
                            ->where('penyandang_disabilitas', '=', 1)
                            ->select('jenis_disabilitas', DB::raw('COUNT(*) as jumlah'))
                            ->orderBy('jumlah', 'DESC')
                            ->groupBy('jenis_disabilitas')
                            ->get()
                            ->toArray();

        return view('admin.penduduk.index', compact('banjar', 'gender', 'age', 'residentJobs', 'educations', 'disabilityPeople'));
    }



    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? null;
            $banjar = $request->get('query')['banjar'] ?? null;

            $data = UserData::latest()
                    ->when(!is_null($param) && !preg_match('/[0-9]/', $param), function($query) use ($param){
                        $query->where('nama', 'like', '%'.$param.'%');
                    })
                    ->when(!is_null($param) && !preg_match('/[a-zA-Z]/', $param), function($query) use ($param){
                        $query->where('no_nik', 'like', '%'.$param.'%');
                    })
                    ->when(!is_null($banjar), function($query) use ($banjar){
                        $query->where('banjar', $banjar);
                    })
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

        $data['penyandang_disabilitas'] = isset($data['penyandang_disabilitas']) ? 1 : 0;
        $data['penerima_bantuan']  = isset($data['penerima_bantuan']) ? 1: 0;

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
        $data['penyandang_disabilitas']  = isset($data['penyandang_disabilitas']) ? 1: 0;
        $data['penerima_bantuan']  = isset($data['penerima_bantuan']) ? 1: 0;

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

    public function exportExcel(){

        $data = array_keys(request()->all());
        array_shift($data);
        array_pop($data);

        $banjar = request()->get('_banjar');

        return (new UserDataExport($banjar, $data))->download('data-penduduk-'.time().'.xlsx');
    }

    public function getDeathUserData(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? null;
            $banjar = $request->get('query')['banjar'] ?? null;

            $data = UserData::latest()
                    ->where('status_mutasi', 'Meninggal')
                    ->when(!is_null($param) && !preg_match('/[0-9]/', $param), function($query) use ($param){
                        $query->where('nama', 'like', '%'.$param.'%');
                    })
                    ->when(!is_null($param) && !preg_match('/[a-zA-Z]/', $param), function($query) use ($param){
                        $query->where('no_nik', 'like', '%'.$param.'%');
                    })
                    ->when(!is_null($banjar), function($query) use ($banjar){
                        $query->where('banjar', $banjar);
                    })
                    ->get();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.penduduk.mutasi.meninggal.index');

    }

    public function getMovedUserData(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? null;
            $banjar = $request->get('query')['banjar'] ?? null;

            $data = UserData::latest()
                    ->where('status_mutasi', 'Pindah Data')
                    ->when(!is_null($param) && !preg_match('/[0-9]/', $param), function($query) use ($param){
                        $query->where('nama', 'like', '%'.$param.'%');
                    })
                    ->when(!is_null($param) && !preg_match('/[a-zA-Z]/', $param), function($query) use ($param){
                        $query->where('no_nik', 'like', '%'.$param.'%');
                    })
                    ->when(!is_null($banjar), function($query) use ($banjar){
                        $query->where('banjar', $banjar);
                    })
                    ->get();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.penduduk.mutasi.pindahData.index');

    }

    public function getMovedOutUserData(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? null;
            $banjar = $request->get('query')['banjar'] ?? null;

            $data = UserData::latest()
                    ->where('status_mutasi', 'Pindah Keluar')
                    ->when(!is_null($param) && !preg_match('/[0-9]/', $param), function($query) use ($param){
                        $query->where('nama', 'like', '%'.$param.'%');
                    })
                    ->when(!is_null($param) && !preg_match('/[a-zA-Z]/', $param), function($query) use ($param){
                        $query->where('no_nik', 'like', '%'.$param.'%');
                    })
                    ->when(!is_null($banjar), function($query) use ($banjar){
                        $query->where('banjar', $banjar);
                    })
                    ->get();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true);
        }

        return view('admin.penduduk.mutasi.pindahKeluar.index');

    }

    public function exportDeathResident(){
        return (new DeathResidentExport)->download('data-penduduk-meninggal-'.time().'.xlsx');
    }

    public function exportMovedResident(){
        return (new ResidentMovedDataExport)->download('data-penduduk-pindah-data-'.time().'.xlsx');
    }

    public function exportMovedOutResident(){
        return (new ResidentMovedOutExport)->download('data-penduduk-pindah-keluar-'.time().'.xlsx');
    }

}
