<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public function index(){

        $data = Agenda::latest()->limit(4)->get();

        foreach($data as $item){
            $item->mobile_date = $item->date;
            $item->date = Carbon::parse($item->date)->format('l, d/m/y');
        }

        return ResponseController::create($data, 'success', 'get agenda successfully', 200);

    }
}
