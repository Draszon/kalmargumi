<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getServices() {
        $services = Service::all();
        return view('servicesedit', compact('services'));
    }

    public function editService(Request $request, $id) {
        $validate = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        try {
            $service = Service::findOrFail($id);
            $service->update($validate);
            return back()->with('successService', 'Sikeres adatmódosítás!');
        } catch (\Error $e) {
            return back()->withErrors([
                'errorService' => 'Hiba a szervíz adatok módosítása közben: ' . $e->getMessage()
            ])->withInput();
        }
    }
}
