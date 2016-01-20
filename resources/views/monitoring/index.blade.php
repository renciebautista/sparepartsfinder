@extends('layout.layout')

@section('content')

<!-- Example row of columns -->
<div class="row">
	@foreach($devices as $device)
    <div id="device_{{ $device->id }}" class="col-md-2 device">
      	<div class="light">
			<span class="red"></span>
			<span class="orange"></span>
			<span class="green"></span>
		</div>
		<br>
		<label>{{ $device->description }}</label>
    </div>
    @endforeach
</div>


@stop

@section('page-script')
	setInterval( function () {
	    $.ajax({
	    type: "GET",
	    dataType: 'json',
	    url: "/api/devices", // This is the URL to the API
	  })
	  .done(function( data ) {
	    $.each(data, function(index, device) {
	    	$("#device_"+device.id).find('span').removeClass('active');

	    	if(device.status == 1){
	    		$("#device_"+device.id).find('span.green').addClass('active');
	    	}

	    	if(device.status == 2){
	    		$("#device_"+device.id).find('span.orange').addClass('active');
	    	}

	    	if(device.status == 3){
	    		$("#device_"+device.id).find('span.red').addClass('active');
	    	}

            //console.log($("#device_"+device.id));
        });

	  })
	  .fail(function() {
	    alert( "error occured" );
	  });
	}, 3000 );
@stop