<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index(){
        $treno=Train::all();
        return view('visualizza_treni', ['arrayTreni' => $treno]);

    }
}
