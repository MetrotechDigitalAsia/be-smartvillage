<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ComplaintCategory;
use App\Models\Admin;
use App\Models\ItemBusinessCategory;
use App\Models\Mail;
use App\Models\Signature;
use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Admin::create([
            'fullname' => 'Super Admin',
            'email' => 'superadmin@desagetasan.id',
            'password' => bcrypt('qazwsx'),
            'status' => 'Active',
            'type' => 'Super'
        ]);

        Admin::create([
            'fullname' => 'Admin',
            'email' => 'admin@desagetasan.id',
            'password' => bcrypt('qazwsx'),
            'status' => 'Active',
            'type' => 'Umum'
        ]);

        Admin::create([
            'fullname' => 'Admin Pariwisata',
            'email' => 'adminpariwisata@desagetasan.id',
            'password' => bcrypt('qazwsx'),
            'status' => 'Active',
            'type' => 'Pariwisata'
        ]);

        Admin::create([
            'fullname' => 'Admin Pariwisata',
            'email' => 'adminlayanan@desagetasan.id',
            'password' => bcrypt('qazwsx'),
            'status' => 'Active',
            'type' => 'Layanan'
        ]);

        ComplaintCategory::create(['complaint_category' => 'Pariwisata']);
        ComplaintCategory::create(['complaint_category' => 'Umum']);
        ComplaintCategory::create(['complaint_category' => 'layanan Terpadu']);

        ItemBusinessCategory::create(['item_category' => 'Jasa', 'slug' => 'jasa']);
        ItemBusinessCategory::create(['item_category' => 'Makanan dan Minuman', 'slug' => 'makanan-dan-minuman' ]);
        ItemBusinessCategory::create(['item_category' => 'Ternak', 'slug' => 'ternak']);
        ItemBusinessCategory::create(['item_category' => 'Elektronik', 'slug' => 'elektronik']);
        ItemBusinessCategory::create(['item_category' => 'Properti', 'slug' => 'properti']);
        ItemBusinessCategory::create(['item_category' => 'Pakaian', 'slug' => 'pakaian']);
        ItemBusinessCategory::create(['item_category' => 'Perabotan', 'slug' => 'perabotan']);
        ItemBusinessCategory::create(['item_category' => 'Kesehatan', 'slug' => 'kesehatan']);
        ItemBusinessCategory::create(['item_category' => 'Lainnya', 'slug' => 'lainnya']);

        $users = UserData::limit(5)->get();

        // foreach($users as $user){

        //     $user->update(['akun_mobile_app' => 1]);

        //     UserLogin::create([
        //         'no_nik' => $user->no_nik,
        //         'password' => bcrypt($user->no_nik),
        //         'status' => 'Active',
        //         'fcm' => $user->no_nik . time() * rand(1,60)
        //     ]);

        // }

        Mail::create([
            'id' => '990636ad-0896-4953-8fad-19c152424a4f',
            'title' => 'Surat Keterangan Kelahiran',
            'slug' => str_replace(' ','-', strtolower('Surat Keterangan Kelahiran')),
            'image' => '-',
            'description' => '-',
        ]);

        Mail::create([
            'id' => '990636ad-0906-4cb3-b64e-242dba590297',
            'title' => 'Surat Keterangan Tempat Usaha',
            'slug' => str_replace(' ','-', strtolower('Surat Keterangan Tempat Usaha')),
            'image' => '-',
            'description' => '-',
        ]);

        Mail::create([
            'id' => '4dc010d6-0da9-11ee-9013-a45e60e3e12d',
            'title' => 'F2-01',
            'slug' => 'f2-01',
            'image' => '-',
            'description' => '-',
        ]);

        Mail::create([
            'id' => 'd43bb42c-0dbc-11ee-9013-a45e60e3e12d',
            'title' => 'Surat Pernyataan Lahir',
            'slug' => 'surat-pernyataan-lahir',
            'image' => '-',
            'description' => '-',
        ]);

        $saksi = UserData::where('banjar', 'Ubud')->inRandomOrder()->first();

        Signature::create([
            'name' => $saksi->nama,
            'nik' => $saksi->no_nik,
            'kk' => $saksi->no_kk,
            'position' => 'Kelian Banjar',
            'banjar' => $saksi->banjar,
            'address' => $saksi->alamat,
            'citizenship' => $saksi->kewarganegaraan,
            'job' => $saksi->pekerjaan,
            'image' => '-',
            'age' => Carbon::now()->format('Y') - Carbon::parse($saksi->tanggal_lahir)->format('Y'),
        ]);

        $saksi = UserData::where('banjar', 'Buangga')->inRandomOrder()->first();

        Signature::create([
            'name' => $saksi->nama,
            'nik' => $saksi->no_nik,
            'kk' => $saksi->no_kk,
            'position' => 'Kelian Banjar',
            'banjar' => $saksi->banjar,
            'address' => $saksi->alamat,
            'citizenship' => $saksi->kewarganegaraan,
            'job' => $saksi->pekerjaan,
            'image' => '-',
            'age' => Carbon::now()->format('Y') - Carbon::parse($saksi->tanggal_lahir)->format('Y'),
        ]);

        $saksi = UserData::where('banjar', 'Tengah')->inRandomOrder()->first();

        Signature::create([
            'name' => $saksi->nama,
            'nik' => $saksi->no_nik,
            'kk' => $saksi->no_kk,
            'position' => 'Kelian Banjar',
            'banjar' => $saksi->banjar,
            'address' => $saksi->alamat,
            'citizenship' => $saksi->kewarganegaraan,
            'job' => $saksi->pekerjaan,
            'image' => '-',
            'age' => Carbon::now()->format('Y') - Carbon::parse($saksi->tanggal_lahir)->format('Y'),
        ]);

        // $mails = Mail::first();

        // $users = UserLogin::all();

        // foreach ($users as $i => $user) {
            
        //     $user->mail()->attach($mails,[
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //         'status' => $i % 2 == 0 ? 'Pending' : 'Process',
        //         'mail_number' => 'SRT/'. rand(1,40). '/'. Carbon::now()->format('Y'),
        //     ]);

        // }


    }
}
