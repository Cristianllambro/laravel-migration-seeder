<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class ControllerTrains extends Controller
{
    public function index() {
        $item = Train::where('Orario_di_partenza', 'LIKE', date('Y-m-d', time())."%")->get();
        return view('train', compact('item'));
    }    
    
    public function page()
    {
        $myTrain = Train::paginate(25);
        return view('page_train', compact('myTrain'));
    }
}
