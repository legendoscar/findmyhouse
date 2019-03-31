<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function post(){
        return view('properties.property');
    }
}
