<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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

    public $province;
    public $city;
    public $district;
    public $village;

    public $list_of_province = [];
    public $list_of_city = [];
    public $list_of_district = [];
    public $list_of_village = [];

    protected $listeners = [
        'selectSubject1' => 'setSubject1Data',
        'selectSubject2' => 'setSubject2Data',
        'submitMail' => 'create',
    ];

    public function getVillage($val){

        $selected_district = array_filter($this->list_of_district, function($e) use ($val) {
            return $e['name'] == $val;
        });

        $selected_district = array_values($selected_district);

        $res = Http::get('https://api.goapi.id/v1/regional/kelurahan',[
            'api_key' => 'anSAtWl0cS2X4SaNf1qFDqLNQZ8qwr',
            'kecamatan_id' => $selected_district[0]['id']
        ]);

        $this->list_of_village = $res->json('data');

    }

    public function getDistrict($val){

        $selected_city = array_filter($this->list_of_city, function($e) use ($val) {
            return $e['name'] == $val;
        });

        $selected_city = array_values($selected_city);

        $res = Http::get('https://api.goapi.id/v1/regional/kecamatan',[
            'api_key' => 'anSAtWl0cS2X4SaNf1qFDqLNQZ8qwr',
            'kota_id' => $selected_city[0]['id']
        ]);

        $this->list_of_district = $res->json('data');

    }

    public function getCity($val){

        $selected_province = array_filter($this->list_of_province, function($e) use ($val) {
            return $e['name'] == $val;
        });

        $selected_province = array_values($selected_province);

        $res = Http::get('https://api.goapi.id/v1/regional/kota',[
            'api_key' => 'anSAtWl0cS2X4SaNf1qFDqLNQZ8qwr',
            'provinsi_id' => $selected_province[0]['id']
        ]);

        $this->list_of_city = $res->json('data');

    }

    public function getProvince(){
        $res = Http::get('https://api.goapi.id/v1/regional/provinsi',[
            'api_key' => 'anSAtWl0cS2X4SaNf1qFDqLNQZ8qwr'
        ]);

        $this->list_of_province = $res->json('data');

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
            'subject_1_address' => 'required',
            'subject_2_address' => 'required',
            'subject_1_father_name' => 'required',
            'subject_1_father_age' => 'nullable',
            'subject_1_father_address' => 'required',
            'subject_1_father_nik' => 'nullable',
            'subject_1_father_job' => 'nullable',
            'subject_1_mother_name' => 'required',
            'subject_1_mother_nik' => 'nullable',
            'subject_1_mother_age' => 'nullable',
            'subject_1_mother_job' => 'nullable',
            'subject_2_father_name' => 'required',
            'subject_2_father_address' => 'required',
            'subject_2_father_nik' => 'nullable',
            'subject_2_father_age' => 'nullable',
            'subject_2_father_job' => 'nullable',
            'subject_2_mother_name' => 'required',
            'subject_2_mother_age' => 'required',
            'subject_2_mother_nik' => 'nullable',
            'subject_2_mother_job' => 'nullable',
            'banjar' => 'required',
            'marriage_location' => 'required',
            'district' => 'required',
            'village' => 'required',
            'city' => 'required',
            'province' => 'required'
        ]);

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
            'subject_1_father_address' => $this->subject_1_father_address,
            'subject_1_father_nik' => $this->subject_1_father_nik ?? '',
            'subject_1_father_job' => $this->subject_1_father_job ?? '',
            'subject_1_father_age' => $this->subject_1_father_age ?? '',
            'subject_1_mother_name' => $this->subject_1_mother_name,
            'subject_1_mother_nik' => $this->subject_1_mother_nik ?? '',
            'subject_1_mother_job' => $this->subject_1_mother_job ?? '',
            'subject_1_mother_age' => $this->subject_1_mother_age ?? '',
            'subject_2_father_name' => $this->subject_2_father_name,
            'subject_2_father_address' => $this->subject_2_father_address,
            'subject_2_father_age' => $this->subject_2_father_age ?? '',
            'subject_2_father_nik' => $this->subject_2_father_nik ?? '',
            'subject_2_father_job' => $this->subject_2_father_job ?? '',
            'subject_2_mother_name' => $this->subject_2_mother_name,
            'subject_2_mother_nik' => $this->subject_2_mother_nik ?? '',
            'subject_2_mother_job' => $this->subject_2_mother_job ?? '',
            'subject_2_mother_age' => $this->subject_2_mother_age ?? '',
            'subject_1' => $subject_1,
            'subject_2' => $subject_2,
            'postal_code' => $this->postal_code,
            'parent_province' => $this->province,
            'parent_district' => $this->district,
            'parent_city' => $this->city,
            'parent_village' => $this->village,
            'marriage_location' => $this->marriage_location,
            'subject_1_address' => $this->subject_1_address,
            'subject_2_address' => $this->subject_2_address
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
