<?php

namespace App\Http\Controllers;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Token;


use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FCMController extends Controller
{
    public function generateToken(){


        // $firebase = (new Factory)
        // ->withServiceAccount('/path/to/serviceAccountKey.json') // Ganti dengan lokasi file service account key Firebase Anda
        // ->create();
        // $serverKey = 'AAAAmpyU7Fo:APA91bGWUeN3RbtEPzo_Mp1X1CEGaLAzVudwOEUI1sRoMApO33P8p9kKimE52b4z7itt6PdHkGBSkLOiRbnrp43YMVT8BsnY6AN5SpP2BLE5D61GCenyKz13RndB4R_nBPAYJKMASetl';

        // $client = new Client();

        // $response = $client->post('https://fcm.googleapis.com/v1/projects/getasan-push-notif/registrationTokens', [
        //     'headers' => [
        //         'Authorization' => 'Bearer ' . $serverKey,
        //         'Content-Type' => 'application/json',
        //     ],
        //     'json' => [
        //         'label' => 'User ' . 'adsf',
        //     ],
        // ]);

        // // Simpan token ke dalam database atau tempat penyimpanan yang sesuai
        // $body = json_decode($response->getBody(), true);
        // $fcmToken = $body['token'];

        // return $fcmToken;

        // return $firebase;

    }
}
