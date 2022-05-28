@extends('layout.app')
@section('content')
 
 

<div class="card">
  <div class="card-header">Account Page</div>
  <div class="card-body">
   
        <div class="card-body">
        <h5 class="card-title">Name : {{ $accounts->type }}</h5>
        <p class="card-text">Address : {{ $accounts->email }}</p>
        <p class="card-text">Mobile : {{ $accounts->password }}</p>
        <p class="card-text">Address : {{ $accounts->role }}</p>
        <p class="card-text">Mobile : {{ $accounts->store}}</p>
        {{-- jasdjasdhkjashdaskj --}}

  </div>
       
    </hr>
  
  </div>
</div>