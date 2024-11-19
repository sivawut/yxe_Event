<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item2;

class PipeController extends Controller
{
    //
    public function showItem() {
        return view('pipeshowitem');
    }

    public function addItem() {
        return view('pipeadditem');
    }

    public function add() {
        $item = new Item2();
        //$item->category = request('category');
        //$item->details = request('details');
        //$item->topic = 'hard code topc';
        //$item->ordertype = 1;
        //$item->province = 1;

        $item->save();

        return "Done Add Item to database";
    }
}
