<?php

namespace App\Http\Controllers;

use App\Models\DestinationPoint;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DestinationPointController extends Controller
{

    private $folderName;

    public function __construct(){
        $this->folderName = 'tourismMap.destinationPoint';
    }
    
    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = DestinationPoint::where('name', 'like', '%'.$param.'%')
                    ->orWhere('category', 'like', '%'.$param.'%')
                    ->orWhere('address', 'like', '%'.$param.'%')
                    ->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        $useMap = true;
        $categories = ['F&B', 'Akomodasi', 'Kesehatan', 'Wisata', 'Event', 'Transportasi', 'Ibadah', 'Lainnya'];
        return view('admin.'.$this->folderName.'.form', compact('categories', 'useMap'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'category' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'status' => 'required',
            'phone' => 'nullable',
            'priority' => 'required',
            'website' => 'nullable'
        ]);

        $images = [];

        $validated['slug'] = str_replace(' ', '-', Str::lower($request->name));

        foreach( $request->file('image') as $img ){
            $images[] = $img->store('destination-point');
        }

        $validated['image'] = json_encode($images);

        try {
            DestinationPoint::create($validated);
        } catch (\Exception $e){
            return redirect('/tourism-map/point-destinasi/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('tourism-map/point-destinasi')->with('success', 'create destination point successfully');

    }

    public function show(DestinationPoint $destinationPoint){
        $useMap = true;
        $categories = ['F&B', 'Akomodasi', 'Kesehatan', 'Wisata', 'Event', 'Transportasi', 'Ibadah', 'Lainnya'];
        return view('admin.'.$this->folderName.'.form', compact('destinationPoint', 'useMap', 'categories'));
    }

    public function update(Request $request, DestinationPoint $destinationPoint){

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'category' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'status' => 'required',
            'phone' => 'nullable',
            'priority' => 'required',
            'website' => 'nullable'
        ]);

        $validated['slug'] = str_replace(' ', '-', Str::lower($request->name));

        $images = [];

        if($request->image){

            foreach(json_decode($destinationPoint->image) as $img){
                Storage::delete($img);
            }
            
            foreach( $request->file('image') as $img ){
                $images[] = $img->store('destination-point');
            }

            $validated['image'] = $images;
        }

        try {
            DestinationPoint::find($destinationPoint->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/tourism-map/point-destinasi/show/'. $validated['slug'] )->with('error', $e->getMessage());
            die;
        }

        return redirect('tourism-map/point-destinasi')->with('success', 'update destination point successfully');

    }

    function destroy(DestinationPoint $destinationPoint){

        $data = DestinationPoint::find($destinationPoint->id);

        try {
            $data->delete();
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
            'route' => "admin"
        ]);
    }

    public function changeStatus(DestinationPoint $destinationPoint){
        try {
            DestinationPoint::find($destinationPoint->id)->update(['status' => !$destinationPoint->status]);
        } catch (\Exception $e){
            return redirect('/tourism-map/point-destinasi/show/'. $destinationPoint['slug'] )->with('error', $e->getMessage());
            die;
        }

        return redirect('/tourism-map/point-destinasi/');
    }


}
