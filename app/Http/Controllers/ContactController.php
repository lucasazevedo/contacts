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
            'contact' => 'required|size:9|unique:contacts,contact',
            'email' => 'required|email|unique:contacts,email'
        ]);

    	Contact::create(request(['name', 'contact', 'email']));

    	return redirect('/');
    }

    public function show(Contact $contact) {
    	return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact) {
    	return view('contacts.edit', compact('contact'));
    }

    public function update(Contact $contact) {
    	$contact = Contact::find($contact->id);

        $contactValidation = ($contact->contact == request('contact')) ? 'required|size:9' : 'required|size:9|unique:contacts,contact';
        $emailValidation = ($contact->email == request('email')) ? 'required|email' : 'required|email|unique:contacts,email';

        $this->validate(request(), [
            'name' => 'required|min:5',
            'contact' => $contactValidation,
            'email' => $emailValidation
        ]);

        $contact->update([
        	'name' => request('name'),
        	'contact' => request('contact'),
        	'email' => request('email')]);

    	return redirect('/contact/'.$contact->id);
    }
}
