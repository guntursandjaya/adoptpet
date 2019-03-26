<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdoptersLoginController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function showLoginForm(){
        return view('auth.adopter-login');
    }

    public function login(Request $request)
    {
        //return view('adopter');
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the adopter in
        if (Auth::guard('adopter')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){
            // if successfull, then redirect to their inteded location
            return view('adopter');

        }
            // if unseccessful, then redirect back to the login the form data
           
         
        
    }

    public function index()
    {
        return view('adopter');
    }

}
