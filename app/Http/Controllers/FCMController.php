<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FCMController extends Controller
{
    public function generateToken(){

        $client = new Client();

        $response = $client->post('https://fcm.googleapis.com/v1/projects/getasan-push-notif/registrations',[
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer AIzaSyDYfM7abQm275YPnshHnozoNOtv5lP2Y3g',
            ],
        ]);

        $tokenData = json_decode($response->getBody(), true);

        return response()->json($tokenData);

    }
}
