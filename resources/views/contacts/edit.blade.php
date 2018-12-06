@extends('layouts.master')

@section('content')
	<div class='container'>
		<h1>Edit Contact</h1>
		<hr>
		<form method="POST" action="/contact/update/{{$contact->id}}">
		@csrf
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}" required>
		  </div>
		  <div class="form-group">
		    <label for="contact">Contact</label>
		    <input type="text" class="form-control" id="contact" name="contact" value="{{ $contact->contact }}" required>
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-success">Save</button>
		  </div>
		</form>

		@include('layouts.errors')
		
	</div>
@endsection