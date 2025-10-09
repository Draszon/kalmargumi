<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About_photo;
use App\Models\Aboutme;
use Illuminate\Http\Request;

class EditAboutController extends Controller
{
    public function getAbout () {
        $aboutme = Aboutme::all();
        $aboutPhotos = About_photo::all();
        return view('aboutmeedit', compact('aboutme', 'aboutPhotos'));
    }

    public function editAbout (Request $request, $id) {
        $validate = $request->validate([
            'about' => 'required',
        ]);

        try {
            $aboutme = Aboutme::findOrFail($id);
            $aboutme->update($validate);
            return back()->with('successAbout', 'Sikeres módosítás!');
        } catch (\Error $e) {
            return back()->withErrors([
                'errorAbout' => 'Hiba az adatok módosítása közben: ' . $e->getMessage(),
            ])->withInput();
        }
    }

    public function aboutPhotosDelete($id) {
        $photo = About_photo::findOrFail($id);

        $imagePath = public_path('images/about_photos/' . $photo->path);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $photo->delete();
        return back()->with('successDeletePhoto', 'Sikeres fénykép törlés!');
    }

    public function aboutPhotosStore(Request $request) {
        $request->validate([
            'aboutP' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $file = $request->file('aboutP');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('images/about_photos'), $filename);

        About_photo::create(['path' => $filename]);
        return back()->with('successStorePhoto', 'Sikeres képfeltöltés!');
    }
}
