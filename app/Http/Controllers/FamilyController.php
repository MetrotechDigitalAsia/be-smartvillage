<?php

namespace App\Http\Controllers;

use App\Models\BLT;
use App\Models\Family;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Yajra\DataTables\DataTables;

class FamilyController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'penduduk.family';
    }
    
    public function index(Request $request){

        if($request->ajax()){

            $data = Family::all();

            return DataTables::of($data)
            ->addIndexColumn()
            ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');

    }

    public function show(Family $family){
        $blt = BLT::all();
        return view('admin.'.$this->folderName.'.form', compact('family', 'blt'));
    }

    public function update(Request $request,Family $family){
        
        $data = $request->validate([
            'no_kk' => 'required',
            'status' => 'required',
            'blt_id' => 'required',
        ]);

        try {
            $family->update($data);
        } catch (\Exception $e){
            return redirect('/data-penduduk/keluarga')->with('error', $e->getMessage());
            die;
        }

        return redirect('/data-penduduk/keluarga')->with('success', 'update family successfully');

    }

    public function download(Family $family){

        if(!Storage::exists('/qr_code')){
            Storage::makeDirectory('/qr_code');
        }

        $file = $family->no_kk.'.svg';

        QrCode::size(500)->generate('hai', public_path('storage/qr_code/'.$file));

        return response()->download(public_path('storage/qr_code/'.$file));


    }
}
