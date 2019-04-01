<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Profile;
use Auth;

class ProfilesController extends Controller
{
    public function profile(){
        return view('profiles.profile');
    }

    public function addProfile(Request $request){
        $this->validate($request,[
            'firstName'=>'required',
            'middleName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'state'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'profile_image'=>'required'

        ]);
            $profile = new profile;
            $profile->user_id = Auth::user()->id;
            $profile->firstname = $request->input('firstName');
            $profile->middlename = $request->input('middleName');
            $profile->lastname = $request->input('lastName');
            $profile->email = $request->input('email');
            $profile->state = $request->input('state');
            $profile->address = $request->input('address');
            $profile->dob = $request->input('dob');
            $profile->gender = $request->input('gender');

            
            if(Input::hasFile('profile_image')){
                $file = Input::file('profile_image');
                $file->move(public_path(). '/uploads/' , $file->getClientOriginalName());
                $url = URL::to('/') . '/uploads/' . $file->getClientOriginalName();
            }

            $profile->profile_image = $url;
            $profile->save();
           return redirect('/home')->with('response','Profile created successfully');
            
       
    }
}
 