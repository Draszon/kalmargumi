<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class EditPriceController extends Controller
{
    public function getPrices () {
        $categories = Category::all();

        return view('pricesedit', compact('categories'));
    }

    public function editCategory (Request $request, $id) {
        dd($request->all());
    }

    /*public function editCategory (Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        try {
            $category = Category::findOrFail($id);
            $category->update($validated);         
            return back()->with('successCategoryEdit', 'Sikeres kategória módosítás!');
        } catch (\Error $e) {
            return back()->withErrors([
                'errorCategoryEdit' => 'Hiba a kategória módosítása közben: ' . $e->getMessage()
            ])->withInput();
        }
    }*/
}
