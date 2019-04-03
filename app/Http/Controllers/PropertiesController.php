<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Property;
use App\Location;
use Auth;

class PropertiesController extends Controller
{
public function post(){
        $profile = "Null profile";
        $location = Location::all();
        
        return view('properties.property',compact('profile','location'));
        }

public function addProperty(Request $request){
    
        $this->validate($request, [
            "property_title"=>"required",
            "price"=>'required',
            "location_id"=>'required',
            "description"=>"required",
            "property_image"=>"required",
        ]);
        $property = new Property;
            $property->user_id = Auth::user()->id;
            $property->location_id = $request->input('location_id');
            $property->property_title = $request->input('property_title');
            $property->description = $request->input('description');
            $property->price = $request->input('price');
           
            if(Input::hasFile('property_image')){
                $file = Input::file('property_image');
                $file->move(public_path(). '/properties/' , $file->getClientOriginalName());
                $url = URL::to('/') . '/properties/' . $file->getClientOriginalName();
            }

            $property->property_image = $url;
            $property->save();
           return redirect('/home')->with('response','Property added  successfully');
        
     }

public function view($property_id){
    return "helloview";
}
public function edit($property_id){
    return "helloedit";
}
public function delete($property_id){
    return "hellodelete";
}
}

