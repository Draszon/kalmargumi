<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Galery;
use App\Models\Opening_hour;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function getAllData() {
        $images = Galery::all();
        $comments = Comment::all();
        $openings = Opening_hour::all();
        $contacts = Contact::all();
        
        return view('dashboard', compact('images', 'comments', 'openings', 'contacts'));
    }

    public function deleteImage($id) {
        $image = Galery::findOrFail($id);
        
        $basePath = rtrim(env('PUBLIC_PATH', public_path('images')), '/');
        $imagePath = $basePath . '/galery/' . $image->image;
        //$imagePath = public_path('images/galery/' . $image->image);
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

        $destinationPath = rtrim(env('PUBLIC_PATH', public_path('images')), '/') . '/galery';
        $file->move($destinationPath, $filename);
        //$file->move(public_path('images/galery'), $filename);

        Galery::create(['image' => $filename]);
        return back()->with('success', 'Sikeres képfeltöltés!');
    }
}
