<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class SuratKeteranganPerkawinanForm extends Component
{

    public $subject1;
    public $subject2;
    public $marriage_status;
    public $marriage_to;
    public $marriage_date;
    public $marriage_location;
    public $religion;
    public $head_of_family_name;
    public $head_of_family_phone;
    public $head_of_family_email;
    public $number_of_family_members;
    public $postal_code;
    public $banjar;
    public $subject_1_address;
    public $subject_2_address;
    public $subject_1_father_name;
    public $subject_1_father_address;
    public $subject_1_father_nik;
    public $subject_1_father_job;
    public $subject_1_father_age;
    public $subject_1_mother_name;
    public $subject_1_mother_nik;
    public $subject_1_mother_age;
    public $subject_1_mother_job;
    public $subject_2_father_name;
    public $subject_2_father_age;
    public $subject_2_father_address;
    public $subject_2_father_nik;
    public $subject_2_father_job;
    public $subject_2_mother_name;
    public $subject_2_mother_age;
    public $subject_2_mother_nik;
    public $subject_2_mother_job;

    public $subject_1_province;
    public $subject_1_city;
    public $subject_1_district;
    public $subject_1_village;

    public $subject_2_province;
    public $subject_2_city;
    public $subject_2_district;
    public $subject_2_village;

    public $subject_1_list_of_province = [];
    public $subject_1_list_of_city = [];
    public $subject_1_list_of_district = [];
    public $subject_1_list_of_village = [];

    public $subject_2_list_of_province = [];
    public $subject_2_list_of_city = [];
    public $subject_2_list_of_district = [];
    public $subject_2_list_of_village = [];

    protected $listeners = [
        'selectSubject1' => 'setSubject1Data',
        'selectSubject2' => 'setSubject2Data',
        'submitMail' => 'create',
    ];

    public function getVillage($val, $subject){

        if($subject == 1){
            $selected_district = array_filter($this->subject_1_list_of_district, function($e) use ($val) {
                return $e['name'] == $val;
            });
        } else {
            $selected_district = array_filter($this->subject_2_list_of_district, function($e) use ($val) {
                return $e['name'] == $val;
            });
        }

        $selected_district = array_values($selected_district);

        $res = Http::get('https://api.goapi.io/regional/kelurahan',[
            'api_key' => env('GO_API_KEY'),
            'kecamatan_id' => $selected_district[0]['id']
        ]);

        if($subject == 1)
            $this->subject_1_list_of_village = $res->json('data');
        else 
            $this->subject_2_list_of_village = $res->json('data');

    }

    public function getDistrict($val, $subject){

        if($subject == 1){
            $selected_city = array_filter($this->subject_1_list_of_city, function($e) use ($val) {
                return $e['name'] == $val;
            });
        } else {
            $selected_city = array_filter($this->subject_2_list_of_city, function($e) use ($val) {
                return $e['name'] == $val;
            });
        }

        $selected_city = array_values($selected_city);

        $res = Http::get('https://api.goapi.io/regional/kecamatan',[
            'api_key' => env('GO_API_KEY'),
            'kota_id' => $selected_city[0]['id']
        ]);

        if($subject == 1)
            $this->subject_1_list_of_district = $res->json('data');
        else
            $this->subject_2_list_of_district = $res->json('data');

    }

    public function getCity($val, $subject){

        if($subject == 1){
            $selected_province = array_filter($this->subject_1_list_of_province, function($e) use ($val) {
                return $e['name'] == $val;
            });
        } else {
            $selected_province = array_filter($this->subject_2_list_of_province, function($e) use ($val) {
                return $e['name'] == $val;
            });
        }

        $selected_province = array_values($selected_province);

        $res = Http::get('https://api.goapi.io/regional/kota',[
            'api_key' => env('GO_API_KEY'),
            'provinsi_id' => $selected_province[0]['id']
        ]);

        if($subject == 1)
            $this->subject_1_list_of_city = $res->json('data');
        else 
            $this->subject_2_list_of_city = $res->json('data');

    }

    public function getProvince(){

        $res = Http::get('https://api.goapi.io/regional/provinsi',[
            'api_key' => env('GO_API_KEY')
        ]);

        $this->subject_1_list_of_province = $res->json('data') ?? [];
        $this->subject_2_list_of_province = $res->json('data') ?? [];

    }

    public function mount(){
        $this->getProvince();
    }

    public function render()
    {
        return view('livewire.create-mail.surat-keterangan-perkawinan-form');
    }

    public function setSubject1Data($id){
        $this->subject1 = $id;
    }

    public function setSubject2Data($id){
        $this->subject2 = $id;
    }

    public function create(UserData $userData, Mail $mail){

        if(is_null($this->subject1)){
            $this->emit('subject1NotFound');
            return;
        } 

        if(is_null($this->subject2)){
            $this->emit('subject2NotFound');
            return;
        }

        $subject_1 = UserData::whereId($this->subject1)->first([
            'id',
            'nama as name',
            'alamat as address',
            'pekerjaan as job',
            'tempat_lahir as birthplace',
            'tanggal_lahir as birthdate',
            'agama as religion',
            'no_nik as nik',
            'no_kk as kk',
            'kewarganegaraan as citizenship',
            'jenis_kelamin as gender',
            'banjar',
            DB::raw("CASE WHEN status_akta_kelahiran = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as birth_certificate"),
            DB::raw("CASE WHEN status_akta_perkawinan = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as marriage_certificate"),
            'no_akta_kelahiran as birth_certificate_number',
            'golongan_darah as blood_type',
            'pendidikan as education',
            'status_perkawinan as marriage_status'
        ]);

        $subject_2 = UserData::whereId($this->subject2)->first([
            'id',
            'nama as name',
            'alamat as address',
            'pekerjaan as job',
            'tempat_lahir as birthplace',
            'tanggal_lahir as birthdate',
            'agama as religion',
            'no_nik as nik',
            'no_kk as kk',
            'kewarganegaraan as citizenship',
            'jenis_kelamin as gender',
            'banjar',
            DB::raw("CASE WHEN status_akta_kelahiran = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as birth_certificate"),
            DB::raw("CASE WHEN status_akta_perkawinan = 1 THEN 'ADA' ELSE 'TIDAK ADA' END as marriage_certificate"),
            'no_akta_kelahiran as birth_certificate_number',
            'golongan_darah as blood_type',
            'pendidikan as education',
            'status_perkawinan as marriage_status'
        ]);

        $this->validate([
            'marriage_status' => 'required',
            'marriage_to' => 'required',
            'marriage_date' => 'required',
            'religion' => 'required',
            'head_of_family_name' => 'required',
            'head_of_family_email' => 'required',
            'head_of_family_phone' => 'required',
            'number_of_family_members' => 'required',
            'subject_1_father_name' => 'required',
            'subject_1_father_age' => 'nullable',
            'subject_1_father_nik' => 'nullable',
            'subject_1_father_job' => 'nullable',
            'subject_1_mother_name' => 'required',
            'subject_1_mother_nik' => 'nullable',
            'subject_1_mother_age' => 'nullable',
            'subject_1_mother_job' => 'nullable',
            'subject_2_father_name' => 'required',
            'subject_2_father_nik' => 'nullable',
            'subject_2_father_age' => 'nullable',
            'subject_2_father_job' => 'nullable',
            'subject_2_mother_name' => 'required',
            'subject_2_mother_age' => 'required',
            'subject_2_mother_nik' => 'nullable',
            'subject_2_mother_job' => 'nullable',
            'banjar' => 'required',
            'marriage_location' => 'required',
        ]);

        $subject_1_province = strtolower($this->subject_1_province);
        $subject_1_city = str_replace('Kab. ', '', ucfirst(strtolower($this->subject_1_city)));

        $subject_2_province = strtolower($this->subject_2_province);
        $subject_2_city = str_replace('Kab. ', '', ucfirst(strtolower($this->subject_2_city)));

        $field = json_encode([
            'marriage_status' => $this->marriage_status,
            'marriage_to' => $this->marriage_to,
            'marriage_date' => $this->marriage_date,
            'religion' => $this->religion,
            'head_of_family_name' => $this->head_of_family_name,
            'head_of_family_email' => $this->head_of_family_email,
            'head_of_family_phone' => $this->head_of_family_phone,
            'number_of_family_members' => $this->number_of_family_members,
            'banjar' => $this->banjar,
            'subject_1_father_name' => $this->subject_1_father_name,
            'subject_1_father_nik' => $this->subject_1_father_nik ?? '',
            'subject_1_father_job' => $this->subject_1_father_job ?? '',
            'subject_1_father_age' => $this->subject_1_father_age ?? '',
            'subject_1_mother_name' => $this->subject_1_mother_name,
            'subject_1_mother_nik' => $this->subject_1_mother_nik ?? '',
            'subject_1_mother_job' => $this->subject_1_mother_job ?? '',
            'subject_1_mother_age' => $this->subject_1_mother_age ?? '',
            'subject_2_father_name' => $this->subject_2_father_name,
            'subject_2_father_age' => $this->subject_2_father_age ?? '',
            'subject_2_father_nik' => $this->subject_2_father_nik ?? '',
            'subject_2_father_job' => $this->subject_2_father_job ?? '',
            'subject_2_mother_name' => $this->subject_2_mother_name,
            'subject_2_mother_nik' => $this->subject_2_mother_nik ?? '',
            'subject_2_mother_job' => $this->subject_2_mother_job ?? '',
            'subject_2_mother_age' => $this->subject_2_mother_age ?? '',
            'subject_1' => $subject_1,
            'subject_2' => $subject_2,
            'marriage_location' => $this->marriage_location,
            'subject_1_province' => $subject_1_province,
            'subject_1_city' => $subject_1_city,
            'subject_1_district' => $this->subject_1_district,
            'subject_1_village' => $this->subject_1_village,
            'subject_2_province' => $subject_2_province,
            'subject_2_city' => $subject_2_city,
            'subject_2_district' => $this->subject_2_district,
            'subject_2_village' => $this->subject_2_village,
        ]);

        try {

            DB::table('users_mail')->insert([
                'mail_id' => $mail->id,
                'resident_id' => $userData->id,
                'field' => $field,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);

            $msg = 'Surat Berhasil Dibuat';
            $status = true;

        } catch (\Exception $e){
            $msg = $e->getMessage();
            $status = false;
        }

        $this->emit('mailSubmitted', compact('msg', 'status'));        

    }

}
