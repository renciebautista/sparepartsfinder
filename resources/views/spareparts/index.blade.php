@extends('layout.layout')

@section('content')
  


<div class="row">
  <div class="col-md-4">
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Part Number</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Part Number">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
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
        <tr> 
          <td>49130123000</td> 
          <td>INNENRING 20X25X16 MM</td> 
          <td>0</td> 
        </tr> 
        <tr> 
          <td>50233012300</td> 
          <td>* COUNTERSHAFT MX</td> 
          <td>100</td> 
        </tr> 
        <tr> 
          <td>60013012300</td> 
          <td>BRAKE HOSE FRONT ADV. 05</td> 
          <td>10</td> 
        </tr> 
      </tbody> 
    </table>
  </div>
</div>
@stop