<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
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

    public function download(Family $family){

        $qrCode = QrCode::size(300)->generate('Your QR Code Data');

        $filename = 'qr_code.png';
        $path = storage_path('app/public/' . $filename);
        file_put_contents($path, $qrCode);

        $headers = [
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            'Content-Type' => 'image/png',
        ];

        return response()->download($path, $filename, $headers);

    }
}
