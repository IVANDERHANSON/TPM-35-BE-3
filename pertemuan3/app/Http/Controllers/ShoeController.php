<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShoeController extends Controller
{
    function createShoe() {
        return view('createShoe');
    }

    function createShoe1(Request $request) {
        $request->validate([
            'Name' => ['required', 'min:5'],
            'Size' => ['required', 'integer', 'min:35'],
            'Color' => ['required'],
            'Image' => ['required', 'image']
        ]);

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

    function editShoe($id) {
        $shoe = Shoe::find($id);
        return view('editShoe', compact('shoe'));
    }

    function updateShoe(Request $request, $id) {
        $request->validate([
            'Name' => ['required', 'min:5'],
            'Size' => ['required', 'integer', 'min:35'],
            'Color' => ['required'],
            'Image' => ['required', 'image']
        ]);

        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public'.'/'.$filename);

        Shoe::find($id)->update([
            'Name' => $request->Name,
            'Size' => $request->Size,
            'Color'  => $request->Color,
            'Image' => $filename
        ]);

        return redirect('/read-shoes');
    }

    function deleteShoe($id) {
        $shoeImage = Shoe::find($id)->Image;
        Shoe::destroy($id);
        Storage::delete('/public'.'/'.$shoeImage);
        return redirect('/read-shoes');
    }
}
