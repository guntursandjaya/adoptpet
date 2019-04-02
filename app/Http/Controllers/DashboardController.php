<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user_id = auth()->user()->id;
        $user = user::find($user_id);
        //$user = DB::select('select * from pets where shelter_id = shelter_id', ['shelter_id'=> auth()->user()->id]);


       return view('dashboard')->with('pets',$user->pet);
    }
 }
