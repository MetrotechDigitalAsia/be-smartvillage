<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){

        $data = Mail::all();

        foreach ($data as $item) {
            $item->image = 'storage/' . $item->image;
        }

        return ResponseController::create($data, 'success', 'Daftar surat', 200);
    }
}
