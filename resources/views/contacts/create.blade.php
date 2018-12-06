@extends('layouts.master')

@section('content')
	<div class='container'>
		<h1>Create Contact</h1>
		<hr>
		<form method="POST" action="/contact/store">
		@csrf
		  <div class="form-group">
		    <label for="name">Name</label>
		    <input type="text" class="form-control" id="name" name="name" required>
		  </div>
		  <div class="form-group">
		    <label for="contact">Contact</label>
		    <input type="text" class="form-control" id="contact" name="contact" required>
		  </div>
		  <div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" id="email" name="email" required>
		  </div>
		  <div class="form-group">
		  	<button type="submit" class="btn btn-success">Save</button>
		  </div>
		</form>

		@include('layouts.errors')
		
	</div>
@endsection