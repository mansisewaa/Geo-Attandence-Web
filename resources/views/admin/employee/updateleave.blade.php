@extends('layouts.master')

@section('title')
   Employee Details
 @endsection



@section('content')

<div class= "container">
<div class="card" style="width:500px">
  
    <div class="card-header">
        <h1>Update Status</h1>
    </div>
  
  <div class="card-body">
        <form class ="align-items-center" action="/statusupdate/{{$stat->id}}" method="POST" >
           
            @csrf
           
            <div class="form-group col-mb-3">
                <input type="text" class="form-control"  name="name"  value="{{$stat->name}}">
            </div >
            
            <div class="form-group">
                 <label>Status</label><br>
                <input type="radio" value="{{$stat->accept}}" id="accept" name="accept">
                <label for="accept">Acepted</label>
                <input type="radio" value="{{$stat->reject}}" id="reject" name="reject">
                <label for="reject">Rejected</label>   
            </div>    
                            
            <div class="form-group">
                <div class="col-md-5 offset-md-5">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/leave"  class="btn btn-danger">Cancel</a>
                </div>
            </div>
        </form>
   </div> 

    <div class="card-footer text-muted">
        Thank You
    </div>
</div>
</div>
@endsection


@section('scripts')

@endsection

