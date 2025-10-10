<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index() {
        $categories = Category::with('wheelsService')->get();

        return view('prices', compact('categories'));
    }

    public function reorder() {
        //
    }
}
