<?php

namespace App\Http\Controllers\API;

use App\Models\Investation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class InvestationController extends Controller
{
    public function index(){
        $data = Investation::all();
        return ResponseController::create($data, 'success', 'get all blog successfully', 200);
    }

    public function store(Request $request){
        
        $validated = $request->validate([
            'fullname' => 'required',
            'institute_name' => 'required',
            'institute_address' => 'required',
            'investation_category' => 'required',
            'institute_email' => 'required',
            'institute_phone_number' => 'required',
            'institute_description' => 'required',
        ]);

        $validated['uuid'] = Str::uuid()->toString();


        try {
            Investation::create($validated);
        } catch (\Exception $e){
            return ResponseController::create($e->getMessage(), 'error', 'create data error', 400);
            die;
        }

        return ResponseController::create($validated, 'success', 'crate investment successfully', 200);
    }
}
