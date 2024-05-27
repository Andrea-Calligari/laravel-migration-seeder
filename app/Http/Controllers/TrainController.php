<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{

    public function getTrain()
    {   

        $trains = Train::all();
        $currentDate = now()->format('Y-m-d');
        // $filteredTrain = Train::where('time_of_departure','like', $currentDate . '%')->get();
        $filteredTrain = Train::whereDate('time_of_departure', $currentDate)->get();
        //  dd($filteredTrain);
        return view('pages.welcome', compact('trains', 'filteredTrain'));
    }
}
