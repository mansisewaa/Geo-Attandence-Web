@extends('layouts.master')


@section('title')
    Dashboard
 @endsection

@section('content')
       

<div class="card text-center">
  <div class="card-header">
   <h1> Leave Applications</h1>
  </div>
   <div class="card-body">
        <div class="container">
        <table class="table table-striped table-hover table-bordered border border-2">
                    
                    <thead class=" text-primary">
                         <th>Id</th>
                        <th>Name</th>
                        <th>Leave Type</th>
                        <th>Reaaon</th>
                        <th>Date</th>
                        <th>Status</th>
                    </thead>
                                    
                    <tbody>
                    @foreach ($leave as $data)
                    <tr>
                        <td> {{$data->id}}</td>
                        <td> {{$data->name}}</td>
                        <td> {{$data->leavet}}</td>
                        <td> {{$data->reason}}</td>
                        <td>{{$data->date}} </td>
                        <td>
                            <div>
                            <select class="form-control" id="sel1">
                                <option>Accept</option>
                                <option>Reject</option>
                            </select>
                            </div>
                        </td>

                    <td>
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