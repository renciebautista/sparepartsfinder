@extends('layout.layout')

@section('content')
  


<div class="row">
  <div class="col-md-12">
    <table class="table table-bordered"> 
      <thead> 
        <tr> 
          <th>Machine Number</th> 
          <th>Description</th> 
          <th>Status</th> 
        </tr> 
      </thead> 
      <tbody> 
        <tr> 
          <td>M0001</td> 
          <td>MACHINE 1</td> 
          <td>ONLINE</td> 
        </tr> 
        <tr> 
          <td>M-00192</td> 
          <td>MACHINE 2</td> 
          <td>OFFLINE</td> 
        </tr> 
        <tr> 
          <td>M-002121</td> 
          <td>MACHINE 27</td> 
          <td>OFFLINE</td> 
        </tr> 
      </tbody> 
    </table>
  </div>
</div>
@stop