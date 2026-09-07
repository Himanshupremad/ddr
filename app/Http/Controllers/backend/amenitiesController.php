<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\amenities;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class amenitiesController extends Controller
{
    //

      function storeamenities(request $request)
    {
        $data = $request->validate([
            'image' => 'required',
            'name' => 'required',

        ]);

        $img = str::random(8) . '.' . $request->image->extension();
        $request->image->move(public_path('amenities'), $img);
        $data['image'] = 'amenities/' . $img;

        $result = amenities::create($data);
        if ($result) {
            return redirect()->route('listamenities')->with('success', 'amenities is created');

        } else {
            return back()->with('error', 'amenities is not created');
        }
    }


    function createamenities(){
        return view('backend.amenities.createamenities');
    }

    function listamenities(){
        $amenitiess = amenities::all();
        return view('backend.amenities.listamenities', compact('amenitiess'));
    }
}
