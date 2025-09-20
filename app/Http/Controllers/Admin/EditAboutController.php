<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutme;
use Illuminate\Http\Request;

class EditAboutController extends Controller
{
    public function getAbout () {
        $aboutme = Aboutme::all();
        return view('aboutmeedit', compact('aboutme'));
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
}
