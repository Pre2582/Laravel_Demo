<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    //
    function getData(Request $req)
    {
        $req->validate([
           'username'=>'required | max:10', 
           'usernumber'=>'required |min:10', 
           'useremail'=>'required' ,
           'userpassword'=>'required |min:5' 

        ]);
        return $req->input();
    }
}
