<?php

namespace App\Http\Controllers\API\TourismMap;

use App\Http\Controllers\API\ResponseController;
use App\Http\Controllers\Controller;
use App\Models\DestinationPoint;
use Illuminate\Http\Request;

class DestinationPointController extends Controller
{
    public function index(){

        $data = DestinationPoint::where('status', 1)->get();
        
        foreach ($data as $i => $item) {
            $data[$i]->image =  json_decode($item->image)[0] ?? '';
            $data[$i]->image = 'storage/' . $data[$i]->image;
        }

        return ResponseController::create($data, 'success', 'get destination point successfully', 200);

    }

    public function getPriorityPoints(){
        $data = DestinationPoint::where('status', 1)->where('priority', true)->get();
        
        foreach ($data as $i => $item) {
            $data[$i]->image =  json_decode($item->image)[0] ?? '';
            $data[$i]->image = 'storage/' . $data[$i]->image;
        }

        return ResponseController::create($data, 'success', 'get destination point successfully', 200);
    }

    public function filter(Request $request){

        $data = DestinationPoint::where('status', 1)->where('category','LIKE','%'.$request->category.'%')->get();

        foreach ($data as $i => $item) {
            $data[$i]->image =  json_decode($item->image)[0] ?? '';
            $data[$i]->image = 'storage/' . $data[$i]->image;
        }

        return ResponseController::create($data, 'success', 'get destination point successfully', 200);
    }
}
