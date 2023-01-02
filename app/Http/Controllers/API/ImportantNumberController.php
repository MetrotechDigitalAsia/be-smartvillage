<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ImportantNumber;
use Illuminate\Http\Request;

class ImportantNumberController extends Controller
{

    public function index(){

        $data = ImportantNumber::latest()->get();

        return ResponseController::create($data, 'success', 'get number success', 200);

    }
    
    public function filterInfo(Request $request){

        $data = ImportantNumber::where('regency', $request->banjar)->get();

        return ResponseController::create($data, 'success', 'get number success', 200);

    }
}
