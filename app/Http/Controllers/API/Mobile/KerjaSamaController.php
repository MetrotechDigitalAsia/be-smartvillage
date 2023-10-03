<?php

namespace App\Http\Controllers\API\Mobile;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\KerjaSama;
use Illuminate\Http\Request;

class KerjaSamaController extends Controller
{
    
    public function index()
    {

        $data = KerjaSama::latest()->first();

        $data->image = asset('storage'). '/'.$data->image;

        return ResponseController::create($data, 'success', 'get kerja sama success', 200);   
    }

}
