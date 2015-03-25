@extends('layout.master')

@section('content')

<!-- <div class="container"> -->







<div>
	<p>
		<strong>TERMS</strong>
		<button class="btn btn-default"><i><span class="glyphicon-class glyphicon glyphicon-caret"></span></i> Add</button>
	</p>
</div>
<div>
	


</div>
<table class="table table-striped table-hover">
	<thead>
		<tr>		
			<th><i><span class="glyphicon-class glyphicon glyphicon-plus"></span></i></th>
			<th>lang_id</th>
			<th>Term</th>
			<th>Description</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>		
			<td></td><td></td>
			<td><input type="text" class="form-control" placeholder="">			</td>
			<td><input type="text" class="form-control" placeholder="">			</td>
			<td><input type="text" class="form-control" placeholder="">			</td>
			<td><input type="text" class="form-control" placeholder="">			</td>
			<td><input type="text" class="form-control" placeholder="">			</td>
			<td><input type="text" class="form-control" placeholder="">			</td>
			<td><input type="text" class="form-control" placeholder="">			</td>
		</tr>
	</tbody>
</table>

	@if($terms->count())		
				

			<table class="table table-hover">
				<thead>
					<tr>
						<th> ID </th>
						<th> lang_id </th>
						<th> Title</th>
						<th> Description</th>
						<th> </th>
						<th> </th>
						<th> MA </th>
						<th> Aj </th>
						<th> RS </th>
					</tr>
				</thead>

				<tbody>
					@foreach($terms as $term)
					<tr>
						<td>{{ $term->id }} </td>
						<td>{{ $term->lang_id }} </td>
						<td><a href="{{ route('terms.show', [$term->id]) }}">{{ $term->title }}</a></td>
						<td>{{ $term->description }}</td>
						<td><a href="{{ route('terms.edit', [$term->id] ) }}"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td> 			{{ Form::open(array('url' => 'terms/' . $term->id, 'class' => 'pull-right')) }}
						                    {{ Form::hidden('_method', 'DELETE') }}
						                    
						                    {{ Form::button('<i class="glyphicon glyphicon-trash"></i>', array(
						                    	'type' => 'submit',
						                    	'class' => 'actions-line icons-trash',
						                    	'onClick' => 'return confirm("Are you sure?")'
						                    	)) }}
						                    
						                {{ Form::close() }}
						</td>
						<td><div class="checkbox">
							<label>
								<input type="checkbox" value="" style="margin-top: auto;">								
							</label>
						</div></td>
						<td><div class="checkbox">
							<label>
								<input type="checkbox" value="" style="margin-top: auto;">								
							</label>
						</div></td>
						<td><div class="checkbox">
							<label>
								<input type="checkbox" value="" style="margin-top: auto;">								
							</label>
						</div></td>
					</tr>
					@endforeach
				</tbody>
			</table>

			

	@else

	<h1>No terms, please seed your DB!</h1>
	
			
@endif

<div class="text-center">
<ul class="pagination">
	{{ $terms->links() }}
</ul>

</div>
<!-- </div> -->




@stop