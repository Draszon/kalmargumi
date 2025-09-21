<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class editContactController extends Controller
{
    public function editContact(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        try {
            $contacts = Contact::findOrFail($id);
            $contacts->update($validated);

            return back()->with('successContact', 'Sikeres módosítás!');
        } catch (\Exception $e) {
            return back()->withErrors([
                'errorContact' => 'Hiba történt a nyitvatartási adatok frissítése közben: ', $e->getMessage(),
            ])->withInput();
        }
    }
}
