<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
class Roomcontroller extends Controller
{
    //
    function show()
    {
        $data= room::all();
        return view('Roomlist',['rooms'=>$data]);
    }
}
