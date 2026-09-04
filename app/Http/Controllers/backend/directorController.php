<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\director;
use Illuminate\Support\str;
use Illuminate\Http\Request;


class directorController extends Controller
{
    // 
    function storedirector(request $request)
    {
        $var = $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $image = str::random(5). '.' . $request->image->extension(); 
        $request->image->move(public_path('uploads'), $image);
        $var['image'] = 'uploads/'. $image;

        $result = director::create($var);
        if ($result) {
            return redirect()->route('listdirector')->with('success', 'director created');
        }else{
            return back()->with('error', 'director not created');
        }
    }

    function listdirector(request $request){
        $directors = director::all();
        // return $directors;
        return view('backend.director.listdirector', compact('directors'));
    }





    function createdirector(request $request)
    {
        return view('backend.director.createdirector');
    }
}


                  