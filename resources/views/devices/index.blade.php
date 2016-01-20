@extends('layout.layout')

@section('content')

@include('shared.notifications')

<div id="banner">
    <div class="row">
        <div class="col-lg-12">
            <h3>Device List</h3>
        </div>
    </div>
</div>
<hr/>

<table class="table table-bordered"> 
	  <thead> 
		<tr> 
		  <th>UID</th> 
		  <th>Description</th> 
		  <th>Action</th> 
		</tr> 
	  </thead> 
	  <tbody> 
	  	@if(count($devices) > 0)
	  	@foreach($devices as $device)
	  	<tr> 
		  <td>{{ $device->uid }}</td> 
		  <td>{{ $device->description }}</td> 
		  <td></td> 
		</tr>
	  	@endforeach
	  	@else
	  	<tr> 
		  <td colspan="3">No record found.</td> 
		</tr>
	  	@endif
	  </tbody> 
	</table>
@endsection