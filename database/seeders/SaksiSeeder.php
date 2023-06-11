<?php

namespace Database\Seeders;

use App\Models\Saksi;
use Illuminate\Database\Seeder;

class SaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Saksi::create([
            'name' => 'I Putu Antara. S.M',
            'position' => 'Kelian Banjar Dinas Ubud',
            'nik' => '0210001000',
            'kk' => '0210001000',
            'citizenship' => 'WNI',
        ]);

        Saksi::create([
            'name' => 'I Putu Subawa',
            'position' => 'Kelian Banjar Dinas Kauh',
            'nik' => '0210001000',
            'kk' => '0210001000',
            'citizenship' => 'WNI',
        ]);

        Saksi::create([
            'name' => 'I Gusti Ngurak Adiadmika. SH',
            'position' => 'Kelian Banjar Dinas Tengah',
            'nik' => '0210001000',
            'kk' => '0210001000',
            'citizenship' => 'WNI',
        ]);

        Saksi::create([
            'name' => 'I Wayan Sunarta',
            'position' => 'Kelian Banjar Dinas Buangga',
            'nik' => '0210001000',
            'kk' => '0210001000',
            'citizenship' => 'WNI',
        ]);

    }
}
