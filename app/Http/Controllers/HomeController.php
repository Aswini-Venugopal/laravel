<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Validator;
use Auth;
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
        return view('home');
    }

    public function edit(Request $request)
    {
        $this->validate($request,[            
            'name' => 'required',            
            'email' => 'required|email',
             ]);
           
            $user_id = Auth::user()->id;
            $updateDetails=array( 
                                    'name' => $request->input('name'),
                                    'email' => $request->input('email'),
                                );

                                   // DB::table('vendor_registartion')
                                   //  ->where('id', Auth::user()->id)
                                   //  ->update($updateDetails); 
                    
                    DB::table('vendor_registartion')
                        ->where('id', Auth::user()->id)
                        ->update($updateDetails);
                return view('/profile');
                   
                }
public function logout(Request $request)
{
    // $this->guard()->logout();

    $request->session()->flush();

    $request->session()->regenerate();

    return redirect('login');
}
public function delete(Request $request)
    {
         $user_id = Auth::user()->id;

        DB::table('vendor_registartion')->where('id', $user_id)->delete();
       
        // $user = DB::table('vendor_registartion')->get();
        return view('home');


    }
    
}
