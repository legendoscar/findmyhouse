<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Property;
use App\Location;
class PagesController extends Controller
{
    
    public function getHome(){ 
    	return view('index');
    }
    public function getContact(){
    	return view('contact');
    }
    public function getAbout(){
    	return view('about');
    }
    public function getPlaces(){
    	return view('places');
    }
    public function getBlog(){
        return view('blog');
    }
    public function getCategories(){
        return view('categories');
    }
    public function getListing(){
       $locations = Location::all();
      
        //for displaying the posts
            $properties = Property::paginate(10);
    
        return view('listings',compact('locations','properties'));
    }
    public function view($property_id){

    $properties =Property::where('id', '=', $property_id)->get();
    $locations = Location::all();

    $images = DB::table('properties')->
         join('images','properties.id', '=' , 'images.properties_id')
         ->select('images.*')
         ->where(['images.properties_id' => $property_id ])
         ->get();
    
    return view('listview',compact('properties','locations','images'));
    }
}
