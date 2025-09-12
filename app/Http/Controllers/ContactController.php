<?php

namespace App\Http\Controllers;

use App\Models\Opening_hour;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        $openingH = Opening_hour::all();

        return view('contact', compact('contacts', 'openingH'));
    }
}
