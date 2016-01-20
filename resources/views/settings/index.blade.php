@extends('layout.layout')

@section('content')

@include('shared.notifications')
  
<div id="banner">
    <div class="row">
        <div class="col-lg-12">
            <h3>Settings</h3>
        </div>
    </div>
</div>
<hr/>


<div class="row">
  	<div class="col-md-4">
  		{!! Form::open(array('route' => 'settings.store')) !!}

  			<div class="form-group"> 
  				{!! Form::label('app_name', 'App Name') !!}
  				{!! Form::text('app_name',(!empty($settings->app_name)? $settings->app_name:'villTech'),array('class' => 'form-control',  'placeholder' => 'App Name')) !!}
  			</div> 
  			{!! Form::submit('Update', array('class' => 'btn btn-default')) !!}
  		{!! Form::close() !!}
  	</div>
</div>



@stop