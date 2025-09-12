<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    public function index() {
        $aboutMe = Aboutme::all();
        return view('about', compact('aboutMe'));
    }
}
