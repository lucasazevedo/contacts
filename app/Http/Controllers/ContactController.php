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
            'contact' => 'required|digits:9|numeric|unique:contacts,contact,NULL,id,deleted_at,NULL',
            'email' => 'required|email|unique:contacts,email,NULL,id,deleted_at,NULL'
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

        $contactValidation = ($contact->contact == request('contact')) ? 
            'required|digits:9|numeric' : 'required|digits:9|numeric|unique:contacts,contact,NULL,id,deleted_at,NULL';

        $emailValidation = ($contact->email == request('email')) ? 
            'required|email' : 'required|email|unique:contacts,email,NULL,id,deleted_at,NULL';

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

    public function delete(Contact $contact) {
        $contact = Contact::find($contact->id);

        $contact->delete();

        return redirect('/');
    }
}
