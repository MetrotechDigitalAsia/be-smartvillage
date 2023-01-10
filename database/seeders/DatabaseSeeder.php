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
use App\Models\Position;
use Illuminate\Database\Seeder;
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
            'uuid' => Str::uuid()->toString(),
            'fullname' => 'Administrator',
            'email' => 'admin@desagetasan.com',
            'password' => bcrypt('qazwsx'),
            'status' => 'Active',
        ]);

        ArticleCategory::create(['article_category' => 'F&B']);
        ArticleCategory::create(['article_category' => 'Hangat']);
        ArticleCategory::create(['article_category' => 'Lainnya']);

        ComplaintCategory::create(['complaint_category' => 'Pariwisata']);
        ComplaintCategory::create(['complaint_category' => 'Sistem Informasi']);

        Position::create(['position_name' => 'amdin']);

        // DestinationPoint::factory(10)->create();
        // ImportantNumber::factory(10)->create();
        // Complaint::factory(5)->create();
        // Agenda::factory(5)->create();
        // Article::factory(5)->create();
        // Investation::factory(5)->create();
    }
}
