<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    function index()
    {
        $trains = Train::all();
        return view('index', compact("trains"));

    }
}