@extends('layout.master')

@section('content')


<div class="container">

<h1>Show:</h1>

{{ Form::open() }}
<strong>ID:  </strong>
		<div class="form-control">{{ $term->id }}</div>
<p></p>
<strong><p>Title</p></strong>
		<div class="form-control">{{ $term->title }}</div>
<p></p>
<strong><p>Description</p></strong>
		<div class="form-control">{{ $term->description }}</div>
<p></p><br/>
<p></p>
<strong><p>Updated:</p></strong>
		<div class="form-control">{{ $term->updated_at }}</div>
<p></p><br/>
		<a href="{{ route('terms.edit', [$term->id] ) }}"><i class="glyphicon glyphicon-edit"></i></a>
		<a href="{{ route('terms.destroy', [$term->id] ) }}"><i class="glyphicon glyphicon-trash" style="color: red;"></i></a>

{{ Form::close() }}



</div>

@stop
