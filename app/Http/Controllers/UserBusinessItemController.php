<?php

namespace App\Http\Controllers;

use App\Models\ItemBusinessCategory;
use App\Models\UserBusinessItem;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UserBusinessItemController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'umkm';
    }
    
    public function index(Request $request){

        if($request->ajax()){

            $data = UserBusinessItem::where('status','approve')->get();
            return DataTables::of($data)->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function pending(Request $request){

        if($request->ajax()){

            $data = UserBusinessItem::where('status', 'pending')->get();
            return DataTables::of($data)->make(true); 

        }

        return view('admin.'.$this->folderName.'.pending');
    }

    public function rejected(Request $request){

        if($request->ajax()){

            $data = UserBusinessItem::where('status', 'rejected')->get();
            return DataTables::of($data)->make(true); 

        }

        return view('admin.'.$this->folderName.'.rejected');
    }

    public function show(UserBusinessItem $userBusinessItem){
        $categories = ItemBusinessCategory::all();
        $fields = ['no_nik', 'user_number_phone', 'item_name', 'item_category_id', 'item_image', 'item_price', 'item_description', 'item_marketplace_link', 'status'];
        return view('admin.'.$this->folderName.'.form', compact('userBusinessItem', 'categories', 'fields'));
    }

    public function create(){

        $categories = ItemBusinessCategory::all();
        $fields = ['no_nik', 'user_number_phone', 'item_name', 'item_category_id', 'item_image', 'item_price', 'item_description', 'item_marketplace_link', 'status'];

        return view('admin.'.$this->folderName.'.form', compact('categories', 'fields'));
    }

    public function store(Request $request){

        // dd($request->file('item_image'));


        $validated = $request->validate([
            'no_nik' => 'required',
            'user_phone_number' => 'required',
            'item_name' => 'required',
            'item_category_id' => 'required',
            'item_image' => 'required',
            'item_price' => 'required',
            'item_description' => 'required',
            'item_marketplace_link' => 'required',
            'status' => 'required'
        ]);


        $validated['uuid'] = Str::uuid()->toString();
        $validated['item_image'] = $request->file('item_image')->store('userBusinessItem');

        try {
            UserBusinessItem::create($validated);
        } catch (\Exception $e){
            return redirect('/informasi-desa/umkm/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('informasi-desa/umkm/approve')->with('success', 'create umkm successfully');

    }

    public function update(Request $request, UserBusinessItem $userBusinessItem){

        $validated = $request->validate([
            'no_nik' => 'required',
            'user_phone_number' => 'required',
            'item_name' => 'required',
            'item_category_id' => 'required',
            'item_price' => 'required',
            'item_description' => 'required',
            'item_marketplace_link' => 'required',
            'status' => 'required'
        ]);

        $validated['uuid'] = Str::uuid()->toString();

        if($request->item_image){
            Storage::delete($userBusinessItem->item_image);
            $validated['item_image'] = $request->file('item_image')->store('userBusinessItem');
        }

        try {
            UserBusinessItem::find($userBusinessItem->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/informasi-desa/umkm/show/'. $validated['uuid'] )->with('error', $e->getMessage());
            die;
        }

        return redirect('informasi-desa/umkm/show/'. $validated['uuid'] )->with('success', 'update umkm successfully');

    }

    function destroy(UserBusinessItem $userBusinessItem){

        $data = UserBusinessItem::find($userBusinessItem->id);

        try {
            Storage::delete($data->item_image);
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

    
}
