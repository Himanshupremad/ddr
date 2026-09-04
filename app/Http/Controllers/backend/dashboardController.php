<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    function dashboard(request $request){
        return view('backend.dashboard');
    }

    
}
