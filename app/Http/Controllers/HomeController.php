<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Galery;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getServices() {
        $services = Service::all();
        return response()->json($services);
    }

    public function services() {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function getComments() {
        $comments = Comment::all();
        return response()->json($comments);
    }

    public function getImage() {
        $images = Galery::all();
        return response()->json($images);
    }
}
