<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\KerjaSama;
use Illuminate\Http\Request;

use function Deployer\get;

class KerjaSamaController extends Controller
{
    
    public function __invoke()
    {

        $data = KerjaSama::latest()->get();

        foreach($data as $d){
            $d->image = asset('storage'). '/'.$d->image;
        }

        return ResponseController::create($data, 'success', 'get number success', 200);   
    }

}
