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

        $data = KerjaSama::latest()->get();

        foreach($data as $d){
            $d->image = asset('storage'). '/'.$d->image;
        }

        return ResponseController::create($data, 'success', 'get number success', 200);   
    }

}
