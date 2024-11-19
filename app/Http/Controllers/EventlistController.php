<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventlist;

class EventlistController extends Controller
{
    //specific table as
    //protected $table = "table_name";




    
    public function show() {

        $category = request('category');
        //error_log("category=$category");
        //error_log("ABC=" . empty($category));

        if ( empty($category )) {
            //return "true";
            $eventlists = Eventlist::all()->sortDesc();
            return view('list', ['eventlists' => $eventlists]);
        } else {
            $eventlists = Eventlist::where('category', $category)->get();
            return view('list', ['eventlists' => $eventlists, 'eventCategory' => $category ]);


        }




    }

    public function showWithID($id) {
        //$list = Eventlist::all();
        $list = Eventlist::where('id', $id)->get();

        if ( count($list) == 1 ) {
            return view('details',  ['list' => $list]);
        }
        else {
            return "Not found database";
        }

        
    }

    
    public function index() {

        //get Eloquent model from database;
        $eventlists = Eventlist::all()->sortDesc();

        //$eventlists = Eventlist::orderBy('id', 'DESC')->all();
        
        //Below is hard-code example of data using array.
        //$eventlists = ['topic' => 'Topic1'];
        //return view('111list111', ['eventlist' => $eventlist]);
        
        
        return view('list', ['eventlists' => $eventlists]);
    }
}
