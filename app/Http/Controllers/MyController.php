<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AuthenticatesUsers;
use Auth;
class MyController extends Controller
{
	public function profile()
    {
        return view('profile');
    }
    public function edit_profile(){
    	return view('edit_profile');
    }
    // public function edit()
    // {
    //     echo "string";
    //     echo $user = Auth::user()->id;
    //     return view('home');
    // }
        
}
