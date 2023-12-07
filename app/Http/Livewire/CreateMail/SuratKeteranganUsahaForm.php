<?php

namespace App\Http\Livewire\CreateMail;

use App\Models\Mail;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class SuratKeteranganUsahaForm extends Component
{

    public $business_name;
    public $business_address;
    public $npwp;
    public $field_of_business;
    public $province;
    public $city;
    public $district;
    public $village;

    public $list_of_province;
    public $list_of_city = [];
    public $list_of_district = [];
    public $list_of_village = [];

    protected $messages = [
        'business_name.required' => 'Nama Usaha harus diisi',
        'business_name.required' => 'Alamat Usaha harus diisi',
        'npwp.required' => 'NPWP harus diisi',
        'field_of_business.required' => 'bidang usaha harus diisi',
    ];

    protected $listeners = [
        'submitMail' => 'create'
    ];

    public function mount(){

        try {
            $this->getProvince();
        } catch (\Throwable $th) {
            Log::debug($th->getMessage());
        }

    }

    public function render()
    {
        return view('livewire.create-mail.surat-keterangan-usaha-form');
    }

    public function getVillage($val){

        $selected_district = array_filter($this->list_of_district, function($e) use ($val) {
            return $e['name'] == $val;
        });

        $selected_district = array_values($selected_district);

        $res = Http::get('https://api.goapi.io/regional/kelurahan',[
            'api_key' => 'anSAtWl0cS2X4SaNf1qFDqLNQZ8qwr',
            'kecamatan_id' => $selected_district[0]['id']
        ]);

        Log::debug($res);

        $this->list_of_village = $res->json('data');

    }

    public function getDistrict($val){

        $selected_city = array_filter($this->list_of_city, function($e) use ($val) {
            return $e['name'] == $val;
        });

        $selected_city = array_values($selected_city);

        $res = Http::get('https://api.goapi.io/regional/kecamatan',[
            'api_key' => env('GO_API_KEY'),
            'kota_id' => $selected_city[0]['id']
        ]);

        Log::debug($res);

        $this->list_of_district = $res->json('data');

    }

    public function getCity($val){

        $selected_province = array_filter($this->list_of_province, function($e) use ($val) {
            return $e['name'] == $val;
        });

        $selected_province = array_values($selected_province);

        $res = Http::get('https://api.goapi.io/regional/kota',[
            'api_key' => env('GO_API_KEY'),
            'provinsi_id' => $selected_province[0]['id']
        ]);

        Log::debug($res);

        $this->list_of_city = $res->json('data');

    }

    public function getProvince(){
        $res = Http::get('https://api.goapi.io/regional/provinsi',[
            'api_key' => env('GO_API_KEY'),
        ]);

        Log::debug($res->json());

        $this->list_of_province = $res->json('data') ?? [];

    }

    public function create(UserData $userData, Mail $mail){

        $this->validate([
            'business_name' => 'required',
            'business_address' => 'required',
            'npwp' => 'required',
            'field_of_business' => 'required',
        ]);

        $this->province = ucfirst(strtolower($this->province));
        $this->city = ucfirst(strtolower($this->city));

        $kab = str_replace('Kab. ', '',$this->city);

        $field = json_encode([
            'business_name' => $this->business_name,
            'business_address' => "$this->business_address, Desa $this->village, Kecamatan $this->district, Kabupaten $kab, Provinsi $this->province.",
            'npwp' => $this->npwp,
            'field_of_business' => $this->field_of_business,
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
