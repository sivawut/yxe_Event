<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventlist;

class AddController extends Controller
{
    //
    public function add() {



        $eventlist = new Eventlist();

        $eventlist->topic = request('topic');
        $eventlist->details = request('details');
        $eventlist->location = request('location');
        $eventlist->category = request('category');
        
        $eventlist->start_date = request('start_date');
        $eventlist->end_date = request('end_date');

        $eventlist->start_time = request('start_time');
        $eventlist->end_time = request('end_time');

        $eventlist->userid = request('userid');
        $eventlist->username = request('username');
        $eventlist->useremail = request('useremail');



        //$eventlist->start_date = request('start_date'); 
        //$eventlist->end_date = request('end_date');
      
        
        
        
        //$eventlist->startdate = null;
        //$eventlist->enddate = null;

        //save to database
        $eventlist->save();
        
        error_log($eventlist);



        return redirect('/list');
    }
}


//INSERT INTO `eventlists` (`id`, `topic`, `details`, `category`, `location`, `startdate`, `created_at`, `updated_at`, `start_date`, `end_date`) VALUES (NULL, 'fsdafsda', 'fsdafasd', '3', 'fdsfsda', '2024-11-06', NOW(), NOW(), '2024-11-16', '2024-11-16');
