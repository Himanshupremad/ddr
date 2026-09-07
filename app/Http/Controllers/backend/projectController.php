<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;

use Illuminate\Support\str;

class projectController extends Controller
{
    //

    
    function storeproject(request $request)
    {
        $var = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'Description' => 'required',
        ]);

        $image = str::random(5). '.' . $request->image->extension(); 
        $request->image->move(public_path('imageupload'), $image);
        $var['image'] = 'imageupload/'. $image;

        $result = project::create($var);
        if ($result) {
            return redirect()->route('listproject')->with('success', 'project created');
        }else{
            return back()->with('error', 'project not created');
        }
    }

    
    function createproject(request $request)
    {
        return view('backend.project.createproject');
    }

    function listproject(request $request){
        $projects = project::all();
        // return $project;
        return view('backend.project.listproject', compact('projects'));
    }





}
