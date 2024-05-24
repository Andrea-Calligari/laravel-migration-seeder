<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TrainController extends Controller
{

    public function getTrain(){

        $trains = TrainController::all();
        dd($trains);
        return view('pages.welcome', compact('trains'));
    }
}
