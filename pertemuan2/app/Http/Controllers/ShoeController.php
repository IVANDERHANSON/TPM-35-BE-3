<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    function createShoe() {
        return view('createShoe');
    }

    function createShoe1(Request $request) {

        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public'.'/'.$filename);

        Shoe::create([
            'Name' => $request->Name,
            'Size' => $request->Size,
            'Color'  => $request->Color,
            'Image' => $filename
        ]);

        return redirect('/read-shoes');
    }

    function readShoes() {
        $shoes = Shoe::all();
        return view('readShoes', compact('shoes'));
    }
}
