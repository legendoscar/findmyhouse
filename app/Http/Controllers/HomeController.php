<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\User;
use Auth;
use App\Property;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//for displaying the user profile
        $user_id = Auth::user()->id;
        $profile = DB::table('users')->
        join('profiles','users.id', '=' , 'profiles.user_id')
        ->select('users.*','profiles.*')
        ->where(['profiles.user_id' => $user_id ])
        ->first();

        //for displaying the posts
            $properties = Property::paginate(2);
            
        return view('home',compact('profile','properties'));
    }
}
