<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Agent;
use App\User;
class AgentsController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('registrations.create');
    }

    
    public function store()
    {
        //validate the agent form
        $this->validate(request(),[
            'firstname'=> ['required', 'string', 'max:255'],
            'middlename'=> ['required', 'string', 'max:255'],
            'lastname'=> ['required', 'string', 'max:255'],
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phonenumber'=> ['required', 'string', 'max:255'],
            'state'=> ['required', 'string', 'max:255'],
            'address'=> ['required', 'string', 'max:255'],
            'dob'=> ['required', 'string', 'max:255'],
            'gender'=> ['required', 'string', 'max:255'],
            'license'=> ['required', 'string', 'max:255'],
            'national'=> ['required', 'string', 'max:255'],
            'password'=>['required', 'string', 'min:4', 'confirmed'],
        ]);
//create and save the agent
       // $user =User::create(request(['name', 'email', 'password']));

       $agent =Agent::create([
           'firstname'=>request('firstname'),
           'middlename'=>request('middlename'), 
           'lastname'=>request('lastname'), 
           'email'=>request('email'), 
           'state'=>request('state'), 
           'address'=>request('address'), 
           'dob'=>request('dob'), 
           'gender'=>request('gender'), 
           'license'=>request('license'), 
           'national'=>request('national'), 
           'password'=>Hash::make(request('password'))
           ]);

        //sign in the agent
        //\Auth::login($agent);

        //redirect agent to the homepage
         return redirect('/')->with('response','Registration Successfully');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
