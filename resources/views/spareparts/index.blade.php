@extends('layout.layout')

@section('content')
  


<div class="row">
  	<div class="col-md-4">
		{!! Form::open(array('route' => 'spareparts.index', 'method' => 'get')) !!}
		  	<div class="form-group">
		  		{!! Form::label('part_no', 'Part Number'); !!}
	            {!! Form::text('part_no',null,['class' => 'form-control','placeholder' => 'Part Number']) !!}
		  	</div>
		  	<div class="form-group">
		  		{!! Form::label('desc', 'Description'); !!}
	            {!! Form::text('desc',null,['class' => 'form-control','placeholder' => 'Description']) !!}
		  	</div>
		  	<button type="submit" class="btn btn-default">Search</button>
		{!! Form::close() !!}
  	</div>

  	<div class="col-md-8">
	<table class="table table-bordered"> 
	  <thead> 
		<tr> 
		  <th>Part Number</th> 
		  <th>Description</th> 
		  <th>Stocks</th> 
		</tr> 
	  </thead> 
	  <tbody> 
	  	@if(count($items) > 0)
	  	@foreach($items as $item)
	  	<tr> 
		  <td>{{ $item->part_no }}</td> 
		  <td>{{ $item->description }}</td> 
		  <td>0</td> 
		</tr>
	  	@endforeach
	  	@else
	  	<tr> 
		  <td colspan="3">No record found.</td> 
		</tr>
	  	@endif
	  </tbody> 
	</table>
  </div>
</div>
@stop