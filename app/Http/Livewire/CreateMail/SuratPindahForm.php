<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Livewire\Component;

class SuratPindahForm extends Component
{

    public $subject;
    public $province;
    public $city;
    public $district;
    public $village;
    public $post_code;
    public $displacement_type;
    public $not_family_displacement;
    public $family_displacement;
    public $displacement_classification;
    public $moving_reason;

    public $list_of_province = [];
    public $list_of_city = [];
    public $list_of_district = [];
    public $list_of_village = [];

    protected $messages = [
        'province.required' => 'provinsi harus diisi',
        'city.required' => 'kota harus diisi',
        'district.required' => 'kecamatan harus diisi',
        'village.required' => 'desa harus diisi',
        'displacement_type.required' => 'jenis kepindahan harus diisi',
        'not_family_displacement.required' => 'anggota yang tidak pindah harus diisi',
        'family_displacement.required' => 'anggota yang pindah harus diisi',
        'displacement_classification.required' => 'klasifikasi kepindahan harus diisi',
        'moving_reason.required' => 'alasan pindah harus diisi',
    ];

    protected $listeners = [
        'selectDeathSubject' => 'selectSubject',
        'submitMail' => 'create'
    ];

    public function mount(){
        $this->getProvince();
    }

    public function selectSubject(UserData $userData){
        $this->subject = $userData;
    }

    public function getProvince(){
        $res = Http::get(env('WILAYAH_API').'/provinces.json');
        $this->list_of_province = $res->json() ?? [];
    }

    public function getCity($val){

        $selected_province = array_filter($this->list_of_province, function($e) use ($val) {
            return Str::title($e['name']) == $val;
        });
        
        $selected_province = array_values($selected_province);

        $res = Http::get(env('WILAYAH_API')."/regencies/{$selected_province[0]['id']}.json");

        $this->list_of_city = $res->json() ?? [];

    }

    public function getDistrict($val){

        $selected_city = array_filter($this->list_of_city, function($e) use ($val) {
            return Str::title($e['name']) == $val;
        });

        $selected_city = array_values($selected_city);

        Log::info($selected_city);

        $res = Http::get(env('WILAYAH_API')."/districts/{$selected_city[0]['id']}.json");


        $this->list_of_district = $res->json();

    }

    public function getVillage($val){

        $selected_district = array_filter($this->list_of_district, function($e) use ($val) {
            return Str::title($e['name']) == $val;
        });

        $selected_district = array_values($selected_district);

        $res = Http::get(env('WILAYAH_API')."/villages/{$selected_district[0]['id']}.json");

        $this->list_of_village = $res->json();

    }

    public function render()
    {
        return view('livewire.create-mail.surat-pindah-form');
    }

    public function create(UserData $userData, Mail $mail){

        Log::info('asdf');
        Log::info($this->all());

        $this->validate([
            // 'province' => 'required',
            // 'city' => 'required',
            // 'district' => 'required',
            // 'village' => 'required',
            'post_code' => 'nullable',
            'displacement_type' => 'required',
            'not_family_displacement' => 'required',
            'family_displacement' => 'required',
            'displacement_classification' => 'required',
            'moving_reason' => 'required',
        ]);

        $field = json_encode([
            'province' => $this->province,
            'city' => $this->city,
            'district' => $this->district,
            'village' => $this->village,
            'post_code' =>  $this->post_code,
            'displacement_type' => $this->displacement_type,
            'not_family_displacement' => $this->not_family_displacement,
            'family_displacement' => $this->family_displacement,
            'displacement_classification' => $this->displacement_classification,
            'moving_reason' => $this->moving_reason,
        ]);

        try {

            DB::table('users_mail')->insert([
                'mail_id' => $mail->id,
                'resident_id' => $userData->id ,
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
