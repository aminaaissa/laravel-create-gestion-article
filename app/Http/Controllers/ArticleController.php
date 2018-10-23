<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Article;
class ArticleController extends Controller
{
    //
    public function index()
           {
//$articles=Article::all();//model json
           $articles=Article::paginate(10


);//model json
//searching 

              $search=request('search');
                $articles =Article::where('name','like',"%$search%")
                ->orWhere('body','like',"%$search%")
                 ->paginate(10);







return view('articles.article',['articles'=>$articles]);
//return Article::all();
    }

public function create(){


return view('articles.create');


}

    public function store(){
        //dd(1);//affiche 1 et
                //Article::insert([

                   // 'name'=>request('name'),
                    //'body'=>request('body'),
                    //'published_at'=>request('published_at'),
                //]);
            //article::create(request()->all() +['user_id'=>1]);
                // return redirect()->route('articles.index');
                request()->validate([
                    'name'=>'required|min:4|unique:articles',
                    'published_at'=>'required',
                    'body'=>'required',
                    
                    ]);

    }
    public function update(){
       
Article::where('id',2)
->update(['name'=>'update']);



    }
}
