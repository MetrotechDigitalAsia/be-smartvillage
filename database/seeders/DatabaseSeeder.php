<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agenda;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Complaint;
use App\Models\ComplaintCategory;
use App\Models\DestinationPoint;
use App\Models\ImportantNumber;
use App\Models\Investation;
use App\Models\InvestationCategory;
use App\Models\Admin;
use App\Models\ItemBusinessCategory;
use App\Models\Mail;
use App\Models\Position;
use App\Models\UserBusinessItem;
use App\Models\UserData;
use App\Models\UserLogin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'email' => 'adminPariwisata@desagetasan.id',
            'password' => bcrypt('qazwsx'),
            'status' => 'Active',
            'type' => 'Parawisata'
        ]);

        Admin::create([
            'fullname' => 'Admin Pariwisata',
            'email' => 'adminLayanan@desagetasan.id',
            'password' => bcrypt('qazwsx'),
            'status' => 'Active',
            'type' => 'Layanan'
        ]);

        // ArticleCategory::create(['article_category' => 'F&B']);
        // ArticleCategory::create(['article_category' => 'Hangat']);
        // ArticleCategory::create(['article_category' => 'Lainnya']);

        ComplaintCategory::create(['complaint_category' => 'Pariwisata']);
        ComplaintCategory::create(['complaint_category' => 'Umum']);
        ComplaintCategory::create(['complaint_category' => 'layanan Terpadu']);

        // Position::create(['position_name' => 'amdin']);

        ItemBusinessCategory::create(['item_category' => 'Jasa']);
        ItemBusinessCategory::create(['item_category' => 'Makanan & Minuman']);
        ItemBusinessCategory::create(['item_category' => 'Ternak']);
        ItemBusinessCategory::create(['item_category' => 'Elektronik']);
        ItemBusinessCategory::create(['item_category' => 'Properti']);
        ItemBusinessCategory::create(['item_category' => 'Pakaian']);
        ItemBusinessCategory::create(['item_category' => 'Perabotan']);
        ItemBusinessCategory::create(['item_category' => 'Kesehatan']);
        ItemBusinessCategory::create(['item_category' => 'Lainnya']);

        $users = UserData::limit(5)->get();

        foreach($users as $user){

            UserLogin::create([
                'no_nik' => $user->NIK,
                'password' => bcrypt($user->NIK),
                'status' => 'Active',
            ]);

        }

        // $data = UserLogin::all();

        // foreach( $data as $i ){
        //     UserBusinessItem::create([
        //         'user_id' => $i->id,
        //         'uuid' => Str::uuid()->toString(),
        //         'item_name' => 'barang umkm' ,
        //         'user_phone_number' => '087819582058',
        //         'item_category_id' => random_int(1,2),
        //         'item_image' => 'userBusinessItem/mmCdHDOgdfmKrgzRVtRKcBRYGfBrL2mXuW8fsU0X.webp',
        //         'item_price' => rand(1, 10000000),
        //         'item_description' => 'asdfasd',
        //         'status' => 'approve',
        //     ]);
        // }

        // UserBusinessItem::factory(10)->create();

        // DestinationPoint::factory(10)->create();
        // ImportantNumber::factory(10)->create();
        // Complaint::factory(5)->create();
        // Agenda::factory(5)->create();
        // Article::factory(5)->create();
        // Investation::factory(5)->create();

        // Mail::factory(5)->create();

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
