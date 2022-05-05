<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class ControllerTrains extends Controller
{
    public function index() {
        $item = Train::where('Orario_di_partenza', 'like', '2022-05-05%')->get(); // sono consapevole che e' un valore statico
        return view('train', compact('item'));
    }
}
