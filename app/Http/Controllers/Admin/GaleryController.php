<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function getImages() {
        $images = Galery::all();
        return view('dashboard', compact('images'));
    }

    public function deleteImage($id) {
        $image = Galery::findOrFail($id);
        
        $imagePath = public_path('images/galery/' . $image->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $image->delete();
        return redirect()->route('dashboard');
    }

    public function storeImage(Request $request) {
        $request->validate([
            'galery-img' => 'required|image|mimes:jpg,jpeg,png|max:1048',
        ]);

        $file = $request->file('galery-img');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('images/galery'), $filename);

        Galery::create(['image' => $filename]);
        return back()->with('success', 'Sikertelen feltöltés!');
    }
}
