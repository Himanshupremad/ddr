<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\gallerys;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class galleryController extends Controller
{
    //
    function storegallery(request $request)
    {
        $data = $request->validate([
            'image' => 'required',

        ]);

        $img = str::random(8) . '.' . $request->image->extension();
        $request->image->move(public_path('gallery'), $img);
        $data['image'] = 'gallery/' . $img;

        $result = gallerys::create($data);
        if ($result) {
            return redirect()->route('listgallery')->with('success', 'gallery is created');

        } else {
            return back()->with('error', 'gallery is not created');
        }
    }


    function creategallery(){
        return view('backend.gallery.creategallery');
    }

    function listgallery(){
        $gallerys = gallerys::all();
        return view('backend.gallery.listgallery', compact('gallerys'));
    }
}
