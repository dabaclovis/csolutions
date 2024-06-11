<?php

namespace App\Http\Controllers\Users;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class HandleFilesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function userAvatar(Request $request)
    {
        $this->validate($request,[
            'avatar' => [ 'max:2048','required'],
        ]);

        if ($request->hasFile('avatar'))
         {
            $file = $request->file('avatar')->hashName();

            if(File::exists('storage/users/'.Auth::user()->avatar))
            {
                File::delete('storage/users/'.Auth::user()->avatar);
            }
            $storedImage = $file.'.'.time();

            $path = $request->file('avatar')->storeAs('users', $storedImage, 'public');

            User::where('id',Auth::user()->id)
            ->update([

                'avatar' => $storedImage,
            ]);
        }
        return back();

    }



}
