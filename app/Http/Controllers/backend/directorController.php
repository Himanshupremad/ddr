<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class directorController extends Controller
{
    // 
    function createdirector(request $request){
        return view('backend.director.createdirector');
    }
}
