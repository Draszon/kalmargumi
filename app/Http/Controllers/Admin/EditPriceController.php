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

    public function editCategory (Request $request) {
        foreach ($request->categories as $categoryData) {
            $category = Category::find($categoryData['id']);
            $category->update([
                'name' => $categoryData['name'],
            ]);
        }
        return back()->with('successCategoryEdit', 'Sikeres kategória módosítás!');
    }
}
