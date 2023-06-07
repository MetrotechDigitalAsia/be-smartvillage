<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\UserLogin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{
    public function index(UserLogin $userLogin)
    {
        $notifications = DatabaseNotification::where('notifiable_id', $userLogin->id)
                        ->whereNull('read_at')
                        ->latest()
                        ->get([
                            'id',
                            'data',
                            'read_at',
                            'created_at'
                        ]);

        return ResponseController::create($notifications,'success', 'get all notification', 200);
    }


    public function read(DatabaseNotification $databaseNotification){

        try {
            $databaseNotification->update(['read_at' => Carbon::now()]);
        } catch (\Exception $e){
            return ResponseController::create($e->getMessage(),'error', 'read notification failed', 200);
        }
        return ResponseController::create(null,'success', 'read notification success', 200);

    }
}
