<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
class eventcontroller extends Controller
{
    //
    function getData()
    {
        return event::all();
    }
}
