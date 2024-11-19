<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AddEventController extends Controller
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

    //this function will be called when Route::() send a request
    //to this Controller.
    public function add() {
        //$userID = Auth::id();
        $user = Auth::user();
        error_log("debug -userid");
        error_log($user->id);
        error_log($user->name);
        error_log($user->email);
        return view('add', ['userid' => $user->id, 'username' => $user->name, 'useremail' => $user->email]);
    }
}
