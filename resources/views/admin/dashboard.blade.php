@extends('layouts.master')


@section('title')
    Dashboard
 @endsection



@section('content')

<div class="row my-4">
  <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0 ">
      <div class="card bg-success mb-3">
          <h5 class="card-header">Employees</h5>
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <p class="card-text text-success"></p>
          </div>
        </div>
  </div>
  <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3 ">
      <div class="card bg-warning mb-3">
          <h5 class="card-header">Users</h5>
          <div class="card-body">
            <h5 class="card-title">{{$users}}</h5>
            <p class="card-text"></p>
            <p class="card-text text-success"></p>
          </div>
        </div>
  </div>
  <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="card  bg-info mb-3">
          <h5 class="card-header">Purchases</h5>
          <div class="card-body">
            <h5 class="card-title">43</h5>
            <p class="card-text"></p>
            <p class="card-text text-danger"></p>
          </div>
        </div>
  </div>
  <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
      <div class="card bg-danger mb-3">
          <h5 class="card-header">Traffic</h5>
          <div class="card-body">
            <h5 class="card-title">64k</h5>
            <p class="card-text"></p>
            <p class="card-text text-success"></p>
          </div>
        </div>
  </div>
</div>
  

@endsection


@section('scripts')

@endsection