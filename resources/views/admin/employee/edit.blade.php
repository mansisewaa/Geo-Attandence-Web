
@extends('layouts.master')

@section('title')
Edit Details
@endsection

@section('content')


<div class="card ">
  <div class="card-header">
   <h1>Edit Employee Details</h1>
  </div>
  <div class="card-body">
    <div class="container">
        <form class ="align-items-center" action="/update/{{$emps->id}}" method="post" >
                @csrf

                <div class="row">
                    <div class="form-group col-md-6">
                    <input type="text" class="form-control"  name="fname"  value="{{$emps->fname}}" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="lname" name="lname" value="{{$emps->lname}}" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-group col-mb-3">
                    <span>Birth</span>
                    <input type="date" id="birth" name="birth" value="{{$emps->birth}}" class="form-control datepicker" >
                </div>
                
                <div class="form-group col-mb-3">
                    <input type="text" class="form-control"  id="Email" name="Email" value="{{$emps->Email}}" placeholder="Email">
                </div>
                
                <div class="form-group col-mb-3">
                    <input type="number" class="form-control" id="number" name="number"value="{{$emps->number}}" placeholder="Phone Number">
                </div>                      
                
                <div class="form-group">
                    <input type="text" class="form-control" id="Address" name="Address" value="{{$emps->Address}}" placeholder="Address">
                </div>
                
                <div class="form-row">
                    <div class="col-7">
                    <input type="text" class="form-control" id="city" name="city" value="{{$emps->city}}" placeholder="City">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" id="state" name="state" value="{{$emps->state}}" placeholder="State">
                    </div>
                    <div class="col">
                    <input type="text" class="form-control" id="zip" name="zip" value="{{$emps->zip}}" placeholder="Zip">
                    </div>
                </div>
                <div class="form-group">
                    <label for="started_at">Started At</label>
                    <input type="date" id="started_at" name="started_at" value="{{$emps->started_at}}" class="form-control ">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" value="{{$emps->password}}" placeholder="Create a Password">
                </div>
                
                
                <div class="form-group">
                    <div class="col-md-10 offset-md-5">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div> 
    <div class="card-footer text-muted">
        Thank You
    </div>
</div>
@endsection

@section('scripts')

@endsection