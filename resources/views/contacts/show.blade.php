@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>Contact Details</h1>
		<hr>
		<div class="row">
		  <div class="col-sm-2">Name:</div>
		  <div class="col-sm-8">{{ $contact->name }}</div>
		</div>
		<div class="row">
		  <div class="col-sm-2">Contact:</div>
		  <div class="col-sm-8">{{ $contact->contact }}</div>
		</div>
		<div class="row">
		  <div class="col-sm-2">Email:</div>
		  <div class="col-sm-8">{{ $contact->email }}</div>
		</div>
		<br>
		<div class="form-group">
			<a class="btn btn-warning" href="/contact/edit/{{ $contact->id }}" role="button">Edit</a>
		</div>
	</div>
@endsection