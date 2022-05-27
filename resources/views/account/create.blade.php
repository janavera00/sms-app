@extends('layout.app')
@section('content')
 
<div class="card">
  <div class="card-header">Account Page</div>
  <div class="card-body">
      
      <form action="{{ url('account') }}" method="post">
        {!! csrf_field() !!}
        <label>Type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="address" class="form-control"></br>
        <label>Role</label></br>
        <input type="text" name="role" id="role" class="form-control"></br>
        <label>Status</label></br>
        <input type="text" name="status" id="status" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
        
    </form>
   
  </div>
</div>
 
@stop
