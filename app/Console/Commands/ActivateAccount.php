<?php

namespace App\Console\Commands;

use App\Models\UserData;
use App\Models\UserLogin;
use Illuminate\Console\Command;

class ActivateAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'account:activate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activate all account';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        try {


            $users = UserData::offset(0)->limit(400)->get();

            foreach($users as $user){
                UserLogin::updateOrCreate(
                    ['no_nik' => $user->no_nik],
                    [
                        'no_nik' => $user->no_nik,
                        'password' => bcrypt($user->no_nik),
                        'status' => 'Active'
                    ]
                );
            }
            $this->info('activate success');
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }

    }
}