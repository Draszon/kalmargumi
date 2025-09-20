<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opening_hour;
use Illuminate\Http\Request;

class OpeningController extends Controller
{
    public function editOpening(Request $request, $id) {
        $validated = $request->validate([
            'day' => 'required|string',
            'openinghour' => 'required',
        ]);

        try {
            $openings = Opening_hour::findOrFail($id);
            $openings->update($validated);
            
            return back()->with('successOpening', 'Sikeres módosítás!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'errorOpening' => 'Hiba történt a frissítés során: ' . $e->getMessage()
            ])->withInput();
        }
        
    }
}
