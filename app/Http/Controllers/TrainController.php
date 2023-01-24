<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    function index()
    {
        $trains = Train::where("departure_date", "LIKE", "2023-01-24%")

            ->get();

        return view('index', compact("trains"));

    }
}


 
/* function index()
    {
        $table = "ambacabanane";
        Train::getSchemaBuilder()->getColumnListing($table);
            return view('index', compact("trains"));

    }  */