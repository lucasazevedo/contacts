<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index() {
    	$contacts = Contact::all();

    	return view('contacts.index', compact('contacts'));
    }

    public function create() {
    	return view('contacts.create');
    }

    public function store() {
        $this->validate(request(), [
            'name' => 'required|min:5',
            'contact' => 'required|size:9',
            'email' => 'required|email'
        ]);

    	Contact::create(request(['name', 'contact', 'email']));

    	return redirect('/');
    }
}
