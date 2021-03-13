<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class Imagescontroller extends Controller
{
    //
    function show()
    {
        $data=Image::paginate(10);
        return view('Imagelist',['Images'=>$data]);
    }
}
