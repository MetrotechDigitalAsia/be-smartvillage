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
            'active' => true
        ]);

        Mail::create([
            'id' => '990636ad-0906-4cb3-b64e-242dba590297',
            'title' => 'Surat Keterangan Tempat Usaha',
            'slug' => str_replace(' ','-', strtolower('Surat Keterangan Tempat Usaha')),
            'image' => '-',
            'description' => '-',
            'active' => true
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

        Mail::create([
            'id' => 'ed62246b-0f68-4538-96a0-93d248dde334',
            'title' => 'Surat Keterangan Meninggal',
            'slug' => 'surat-keterangan-meninggal',
            'image' => '-',
            'description' => '-',
            'active' => true
        ]);

        Mail::create([
            'id' => '89cce6ed-98dc-4685-bd3b-df41358ce5a7',
            'title' => 'F1-02',
            'slug' => 'f1-02',
            'image' => '-',
            'description' => '-',
        ]);

        Mail::create([
            'id' => '821a5253-f8b7-42a9-815b-b9e1d6fc842c',
            'title' => 'Surat Pernyataan Meninggal',
            'slug' => 'surat-pernyataan-meninggal',
            'image' => '-',
            'description' => '-',
        ]);


        Mail::create([
            'id' => 'ce0e4983-792a-467f-9814-b50a9949b270',
            'title' => 'Surat Keterangan Perkawinan',
            'slug' => 'surat-keterangan-perkawinan',
            'image' => '-',
            'description' => '-',
            'active' => true
        ]);

        Mail::create([
            'id' => '9a9f7f45-99d1-415b-a196-db6c7b366d79',
            'title' => 'F1-01',
            'slug' => 'f1-01',
            'image' => '-',
            'description' => '-',
        ]);

        Mail::create([
            'id' => 'f0920d02-e5fb-41e1-a3ac-a2b2a047cb1d',
            'title' => 'Surat Keterangan Belum Pernah Kawin',
            'slug' => 'surat-keterangan-belum-pernah-kawin',
            'image' => '-',
            'description' => '-',
        ]);

        Mail::create([
            'id' => 'a2ec0d70-4d6b-4555-b191-4479ff5071e7',
            'title' => 'Surat Keterangan Belum Pernah Kawin',
            'slug' => 'surat-keterangan-belum-pernah-kawin',
            'image' => '-',
            'description' => '-',
        ]);

        Mail::create([
            'id' => 'cee4b3ba-a272-4f6d-9662-d0b332de4c91',
            'title' => 'Pengumuman Perkawinan',
            'slug' => 'pengumuman-perkawinan',
            'image' => '-',
            'description' => '-',
        ]);

        Mail::create([
            'id' => '3ed5e5a3-67dd-4f8e-89ee-5456a639ea85',
            'title' => 'Surat Pernyataan Suka Sama Suka',
            'slug' => 'surat-pernyataan-suka-sama-suka',
            'image' => '-',
            'description' => '-',
        ]);

        Mail::create([
            'id' => '9be3f95a-798b-4326-ae38-01edce6dcbf3',
            'title' => 'Tanda Tangan Suami Istri',
            'slug' => 'tanda-tangan-suami-istri',
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
