<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MailController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'persuratan.masterData';
    }

    public function index(){
        $mails = Mail::latest()->get();
        return view('admin.'.$this->folderName.'.index', compact('mails'));
    }

    public function create(){
        return view('admin.'.$this->folderName.'.form');   
    }

    public function show(Mail $mail){
        return view('admin.'.$this->folderName.'.form', compact('mail'));   
    }

    public function store(Request $request){

        $validated = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'description' => 'required'
        ]);

        $validated['slug'] =  str_replace(' ', '-', strtolower($request->title));

        if($request->has('image')){
            $validated['image'] = $request->file('image')->store('/surat/master-data');
        }

        try {
            Mail::create($validated);
        } catch (\Exception $e){
            return redirect('/persuratan/master-data')->with('error', $e->getMessage());
        }

        return redirect('/persuratan/master-data')->with('success', 'create mail successfully');

    }

    public function update(Request $request, Mail $mail){

        $validated = $request->validate([
            'title' => 'required',
            'image' => 'nullable',
            'description' => 'required'
        ]);

        $validated['slug'] =  str_replace(' ', '-', strtolower($request->title));

        if($request->has('image')){
            Storage::delete($mail->image);
            $validated['image'] = $request->file('image')->store('/surat/master-data');
        }

        try {
            $mail->update($validated);
        } catch (\Exception $e){
            return redirect('/persuratan/master-data')->with('error', $e->getMessage());
        }

        return redirect('/persuratan/master-data')->with('success', 'update mail successfully');

    }

    public function destroy(Mail $mail){

        try {

            Storage::delete($mail->image);
            $mail->delete();
            $message = 'successfully';
        } catch (\Exception $exception){
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
        ]);

    }
}
