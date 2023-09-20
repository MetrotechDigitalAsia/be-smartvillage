<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    private $folderName;

    public function __construct(){
        $this->folderName = 'informasiDesa.article';
    }
    
    public function index(Request $request){

        if($request->ajax()){

            $param = $request->get('query')['generalSearch'] ?? '';

            $data = Article::with('author')->where('title', 'like', '%'.$param.'%')
                    ->latest()
                    ->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true); 

        }

        return view('admin.'.$this->folderName.'.index');
    }

    public function create(){
        $categories = ArticleCategory::all();
        return view('admin.'.$this->folderName.'.form', compact('categories'));
    }

    public function show(Article $article){
        $categories = ArticleCategory::all();
        return view('admin.'.$this->folderName.'.form', compact('categories', 'article'));
    }

    public function store(Request $request){


        $validated = $request->validate([
            'title' => 'required',
            'article_category' => 'required',
            'description' => 'required',
            'time' => 'required',
            'date' => 'required',
        ]);

        $validated['slug'] = str_replace(' ', '-', Str::lower($request->title));
        $validated['image'] = $request->file('image')->store('article');

        try {
            Article::create([...$validated, 'admin_id' => auth()->user()->id]);
        } catch (\Exception $e){
            return redirect('/informasi-desa/artikel/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('informasi-desa/artikel')->with('success', 'create artikel successfully');

    }

    public function update(Request $request, Article $article){

        $validated = $request->validate([
            'title' => 'required',
            'article_category' => 'required',
            'description' => 'required',
            'time' => 'required',
            'date' => 'required',
        ]);

        $validated['slug'] = str_replace(' ', '-', Str::lower($request->title));

        if($request->image){
            Storage::delete($article->image);
            $validated['image'] = $request->file('image')->store('article');
        }

        try {
            Article::find($article->id)->update($validated);
        } catch (\Exception $e){
            return redirect('/informasi-desa/artikel/create')->with('error', $e->getMessage());
            die;
        }

        return redirect('informasi-desa/artikel')->with('success', 'update article successfully');

    }

    public function destroy(Article $article){

        $data = Article::find($article->id);

        try {
            $data->delete();
            Storage::delete($data->image);
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
