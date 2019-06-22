<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use JD\Cloudder\Facades\Cloudder;
use App\Profile;
use Auth;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(){
        return view('profiles.profile');
    }

    public function addProfile(Request $request){
        $this->validate($request,[
            'profile_image'=>'required|mimes:jpeg,bmp,jpg,png|between:1, 6000',

        ]);
            $profile = new Profile;
            $profile->user_id = Auth::user()->id;

            if($request->hasfile('profile_image')){
                $img = $request->file('profile_image');
                $name = $img->getClientOriginalName();
                $image_name = $img->getRealPath();

                Cloudder::upload($image_name, null);

                list($width, $height) = getimagesize($image_name);

                $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);

                //save to uploads directory
                $img->move(public_path("uploads"), $name);
            }
            

            $profile->profile_image = $image_url;
            $profile->save();
           return redirect('/home')->with('response','Profile created successfully');
            
       
    }
}
 