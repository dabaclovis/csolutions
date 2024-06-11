<?php

namespace App\Http\Controllers\Users;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required','string','max:200',
            'body' => 'required','string','max:4500',
        ],[
            'title' => 'Descriptive heading',
            'body' => 'Content can not be empty',
        ]);
        if ($request->hasFile('image'))
        {
            $file = $request->file('image')->hashName();
            $filename = $file.'.'.time();
            $path = $request->file('image')->storeAs('images',$filename,'public');
        }
        else
        {
            $filename = "noimage";
        }

        Article::insert([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'artimage' => $filename,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show',[
            'article' => $article,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit',[
            'article' => $article,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request,[
            'title' => 'required','string','max:200',
            'body' => 'required','string','max:4500',
        ],[
            'title' => 'Descriptive heading',
            'body' => 'Content can not be empty',
        ]);
        if ($request->hasFile('image'))
         {
            $file = $request->file('image')->hashName();
                if(File::exists('storage/images/'.$article->artimage))
                {
                    File::delete('storagae/images/'.$article->artimage);
                }
            $filename = $file.'.'.time();
            $path = $request->file('image')->storeAs('images',$filename,'public');
        }
        else
        {
            $filename = "noimage";
        }

        Article::update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'artimage' => $filename,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if(Auth::user()->id === $article->user_id){
            $article->delete();
            return back();
        }

        return back();

    }
}