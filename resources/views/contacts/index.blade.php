@extends('layouts.master')

@section('content')
  <div class='container'>
  	<table>
	  <tr>
	    <th>Name</th>
	    <th>Details</th>
	    <th>Edit</th>
	    <th>Delete</th>
	  </tr>
	  @foreach($contacts as $contact)
	  	<tr>
	  		<td>{{ $contact->name }}</td>
	  		<td><a href="/contact/{{ $contact->id }}">Details</a></td>
	  		<td><a href="/contact/edit/{{ $contact->id }}">Edit</a></td>
	  		<td><a href="/contact/delete/{{ $contact->id }}">Delete</a></td>
	  	</tr>
	  @endforeach
	</table>
	<br>
	<div class="form-group">
		<a class="btn btn-success" href="/contact/create" role="button">Create Contact</a>
	</div>
  </div>
@endsection