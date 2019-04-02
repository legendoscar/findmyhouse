<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function post(){
        $profile = "hello lily is here and she wants to cook fried rice and chicken";
        return view('properties.property',compact('profile'));
    }
}
