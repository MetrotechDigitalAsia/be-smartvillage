<?php

namespace Database\Seeders;

use App\Models\Family;
use App\Models\UserData;
use Illuminate\Database\Seeder;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = UserData::select('NO_KK')->distinct('NO_KK')->pluck('NO_KK');

        foreach($data as $i){
            Family::create([
                'no_kk' => $i,
                'status' => '-',
                'qr_code' => 'c',
                'blt_id' => rand(1,3)
            ]);
        }

        

    }
}
