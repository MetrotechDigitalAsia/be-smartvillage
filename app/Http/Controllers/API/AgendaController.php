<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Carbon\Carbon;

class AgendaController extends Controller
{
    public function index(){

        $data = Agenda::join('admin', 'admin.id', '=', 'agendas.admin_id')->latest('agendas.created_at')->limit(4)->get([
            'agendas.id',
            'title',
            'slug',
            'description',
            'admin.fullname as author',
            'date',
            'agendas.created_at'
        ]);

        foreach($data as $item){
            $item->mobile_date = $item->date;
            $item->date = Carbon::parse($item->date)->format('l, d/m/y');
        }

        return ResponseController::create($data, 'success', 'get agenda successfully', 200);

    }
}
