<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ArticleCategoryController extends Controller
{
    
    private $folderName;

    public function __construct(){
        $this->folderName = 'articelCategory';
    }

    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = ArticleCategory::where('article_category', 'like', '%'.$param.'%')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        return view('admin.'.$this->folderName. '.form');
    }
    
    public function show(ArticleCategory $articleCategory){
        return view('admin.'.$this->folderName. '.form', compact('articleCategory'));
    }

    public function store(Request $request){

        $validated = $request->validate([
            'article_category' => 'required|unique:article_categories',
        ]);

        try {
            ArticleCategory::create($validated);
        } catch (\Exception $e){
            return redirect('/master-data/kategori-artikel/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/kategori-artikel')->with('success', 'create articel category successfully');

    }

    public function update(Request $request, ArticleCategory $articleCategory){
        
        $validated = $request->validate([
            'article_category' => 'required'
        ]);

        try {
            ArticleCategory::find($articleCategory->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/master-data/kategori-artikel/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('/master-data/kategori-artikel')->with('success', 'update articel category successfully');

    }

    function destroy(ArticleCategory $articleCategory){

        $data = ArticleCategory::find($articleCategory->id);

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

}
