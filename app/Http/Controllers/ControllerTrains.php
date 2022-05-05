<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trains;

class ControllerTrains extends Controller
{
    public function index() {
        $item = Trains::where(date('d'), '!=', 'Orario_di_partenza');
        return view('train', compact('item'));
    }
}
