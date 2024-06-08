<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.home');
    }

    public function profile()
    {
        return view('users.profile',[
            $user_id = Auth::user()->id,
            $user = User::find($user_id),
            $contact = Contact::find($user_id),
            'contact' => $contact,
            'user' => $user,
        ]);
    }


    public  function AddAddr(Request $request)
    {

        // dd($request);
        Contact::where('id', Auth::user()->id)->update([
            'user_id' => Auth::user()->id,
            'addr' => $request->input('addr'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'zipcode' => $request->input('zipcode'),
            'country' => $request->input('country'),
            'notes' => $request->input('notes'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return back();
    }

    public function mobile(Request $request)
    {
        $this->validate($request,[
            'mobile' => 'required','max:14',
        ]);

        User::where('id',Auth::user()->id)->update([
            'mobile' => $request->input('mobile'),
        ]);
        return back();
    }

    public function contacts(Request $request)
    {
        
    }
}
