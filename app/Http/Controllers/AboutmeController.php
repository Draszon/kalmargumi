<?php

namespace App\Http\Controllers;

use App\Models\About_photo;
use App\Models\Aboutme;
use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    public function index() {
        $aboutMe = Aboutme::all();
        $aboutMePhotos = About_photo::all();
        return view('about', compact('aboutMe', 'aboutMePhotos'));
    }
}
