@extends('layouts.master')

@section('content')
  <div class='container'>
  	<table>
	  <tr>
	    <th>Name</th>
	    <th>Contact</th>
	    <th>Email</th>
	  </tr>
	  @foreach($contacts as $contact)
	  	<tr>
	  		<td>{{ $contact->name }}</td>
	  		<td>{{ $contact->contact }}</td>
	  		<td>{{ $contact->email }}</td>
	  	</tr>
	  @endforeach
	</table>
	<br>
	<div class="form-group">
		<a class="btn btn-success" href="/contact/create" role="button">Create Contact</a>
	</div>
  </div>
@endsection