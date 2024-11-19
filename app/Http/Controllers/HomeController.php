<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //Get User Authentication details -pipe
use App\Models\Eventlist;  //Get Evenlist Eloquent Data Model - pipe


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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //This is home for dashboard
        //It will show events created by users.
        
        $user = Auth::user();  //get user from authentication
        $userid = $user->id;

        $eventlists = Eventlist::where('userid', $userid)->get();
        
        //error_log("Debug list = " . $eventlists);

        return view('home', ['eventlists' => $eventlists]);
    }
}
