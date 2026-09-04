<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

class listdirectorController
{
    //
    function listdirector(request $request){
        return view('backend.director.listdirector');
    }
}
