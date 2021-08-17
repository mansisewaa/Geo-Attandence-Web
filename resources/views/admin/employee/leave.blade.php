@extends('layouts.master')


@section('title')
    Leave Applications
 @endsection

@section('content')
       

<div class="card text-center">
  <div class="card-header">
   <h1> Leave Applications</h1>
  
    @if (session('status'))
    <div class="alert alert-sucess" role="alert"> 
      {{session('status')  }}
    </div>
    @endif
  
  </div>
  
  <div class="card-body">
        <div class="container">
        <table class="table table-striped table-hover table-bordered border border-2">
                    
                    <thead class=" thead-dark">
                         <th>Id</th>
                        <th>Name</th>
                        <th>Leave Type</th>
                        <th>Reaaon</th>
                        <th>Date</th>
                        <th>Period</th>
                        <th>Status</th>
                        <th>Actions</th>
                        

                    </thead>
                                    
                    <tbody>
                    @foreach ($leave as $data)
                    <tr>
                        <td> {{$data->id}}</td>
                        <td> {{$data->name}}</td>
                        <td> {{$data->leavet}}</td>
                        <td> {{$data->reason}}</td>
                        <td>{{$data->date}} </td>
                        <td> {{$data->period}}</td>
                        <td>{{$data->status}}</td>
                        <td>
                        <a href="{{route('employee.updateleave',$data->id)}}" type="submit" 
                          class="btn btn-primary btn-sm">Update </a> 
                    
                        </td>

                    </tr>
                    @endforeach
                    </tbody>  
                </table>

        </div>
    
    </div>


  </div>
  <div class="card-footer text-muted">
    Thank You
  </div>
</div>
@endsection


@section('scripts')

@endsection