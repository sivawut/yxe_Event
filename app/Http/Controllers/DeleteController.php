<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eventlist;

class DeleteController extends Controller
{
    //
    public function delete($id) {

        $eventlist = Eventlist::findOrFail($id);

        $eventlist->delete();

        return redirect('/home');
    }
}
