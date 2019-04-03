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
    $properties =Property::where('id', '=', $property_id)->get();
    $locations = Location::all();
    return view('properties.view',compact('properties','locations'));
    
}
public function edit($property_id){
    $properties =Property::find($property_id);
     $locations = Location::all();
     $location = Location::find($properties->location_id);
    return view('properties.edit',compact('properties','location','locations'));
}
public function editProperty(Request $request,$property_id){

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
        $data = array(
            "user_id"=>$property->user_id,
            "property_title"=>$property->property_title,
            "price"=>$property->price,
            "location_id"=>$property->location_id,
            "description"=>$property->description,
            "property_image"=>$property->property_image
        );
        Property::where('id',$property_id)->update($data);
        $property->update();
       return redirect('/home')->with('response','Property updated  successfully');

 return $property_id;
}
public function delete($property_id){
    Property::where('id',$property_id)->delete();
    return redirect('/home')->with('response','Property deleted  successfully');

}
}

