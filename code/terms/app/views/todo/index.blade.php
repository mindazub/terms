
@extends('layout.master')

@section('content')

<div class="container">
	<h1>TODO list</h1>

	<ol>
		<li>Search functionality</li>
		<strike style="color:red;"><li>Edit term</li></strike>
		<li>Add new term</li>
		<strike style="color:red;"><li>Export to xlsx</li></strike>
		<li>All post routes only if logged in</li>
	</ol>

	

	<div class="col-md-4">
		<input type="text" class="form-control" placeholder="Add Todo">
	</div>

	<div class="col-md-12">
		<button class="btn btn-danger">Add ToDo Item</button>
	</div>

</div>


@stop