<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DestinationPoint;
use Illuminate\Http\Request;

class DestinationPointController extends Controller
{
    public function index(){

        $data = DestinationPoint::all();
        
        foreach ($data as $i => $item) {
            $data[$i]->image =  json_decode($item->image)[0] ?? '';
            $data[$i]->image = 'storage/' . $data[$i]->image;
        }

        return ResponseController::create($data, 'success', 'get destination point successfully', 200);

    }

    public function getPriorityPoints(){
        $data = DestinationPoint::where('priority', true)->get();
        
        foreach ($data as $i => $item) {
            $data[$i]->image =  json_decode($item->image)[0] ?? '';
            $data[$i]->image = 'storage/' . $data[$i]->image;
        }

        return ResponseController::create($data, 'success', 'get destination point successfully', 200);
    }

    public function filter(Request $request){

        $data = DestinationPoint::where('category','LIKE','%'.$request->category.'%')->get();

        foreach ($data as $i => $item) {
            $data[$i]->image =  json_decode($item->image)[0] ?? '';
            $data[$i]->image = 'storage/' . $data[$i]->image;
        }

        return ResponseController::create($data, 'success', 'get destination point successfully', 200);
    }

}
