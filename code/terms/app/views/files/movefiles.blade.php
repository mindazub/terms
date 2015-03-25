@extends('layout.master')

@section('content')


<!-- <div class="container"> -->
	
	<h1>Move files:</h1>

<br/>
<hr/>
<br/>

			{{ Form::open() }}

			<div>
			    {{ Form::label('file', 'Input:') }}
			    {{ Form::file('title', null) }}
			    <br/><br/>

			    {{ Form::button('Import', ['class' => 'btn btn-success']) }}
			</div>
			{{ Form::close() }}

			{{ Form::open(array('route' => 'movefiles')) }}

			<br/>
			<hr/>
			<br/>

			<div>
			    {{ Form::label('file', 'Output:') }}
			    {{ Form::file('title', null) }}
			    <br/><br/>
			    <a href="{{ route('postMoveFiles') }}"> MOVE FILES</a>
			    {{ Form::button('Export', ['class' => 'btn btn-primary']) }}
			</div>

			<br/>
			<hr/>
			<br/>
			{{ Form::close() }}


			


{{ Form::close() }}

<!-- </div> -->

@stop