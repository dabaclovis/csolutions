<?php

namespace App\Http\Controllers\Pages;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about',[
            // $path = base_path().'/public',
            // $path = public_path(),
            // $path = url('public'),
            // $path = asset('public'),
            // $path = App::environment(),
            // $path = env('APP_KEY'),
            $path = env('DB_DATABASE'),


            'path' => $path,
        ]);
    }
}
