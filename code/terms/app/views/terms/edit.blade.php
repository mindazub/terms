
@extends('layout.master')

@section('content')


<h1>Edit:</h1>

{{ Form::model($term, array('method' => 'PATCH', 'route' => array('terms.update', $term->id))) }}

<div>
    {{ Form::label('title', 'Title:') }}
    {{ Form::text('title', null, ['class'=>'form-control']) }}
</div>
<div>
    {{ Form::label('description', 'Description:') }}
    {{ Form::textarea('description', null, ['class'=>'form-control']) }}
</div>
<br/><br/>
<div>
{{ Form::selectYear('year', 2013, 2015, 2014, ['class' => 'field']) }}
{{ Form::selectMonth('month') }}
{{ Form::selectRange('number', 1, 31) }}
<br/><br/>
</div>

<button type="submit" class="btn btn-success">Save Changes</button>

{{ Form::close() }}



@stop