<?php

namespace App\Http\Controllers;

use App\Models\facilities;
use Illuminate\Http\Request;

class facilitiescontroller extends Controller
{
    //
    function getData(){
        return facilities::all();
    }
}
