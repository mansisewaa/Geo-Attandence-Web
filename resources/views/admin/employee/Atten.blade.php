

@extends('layouts.master')


@section('title')
    Dashboard
 @endsection



@section('content')

<div class="card text-center">
  <div class="card-header">
   <h1> Attendance List </h1>
  </div>
  <div class="card-body">
  
        <div class="container">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered border border-2">
                    
                        <thead class="thead-dark">
                            <th>Id</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Time</th>
                        </thead>
                                        
                        <tbody>
                        @foreach( $record as $data)
                            <tr>
                                <td>{{$data->id }}</td>
                                <td> {{ $data->Email }}</td>
                                <td>{{ $data->date }}</td>
                                <td> {{ $data->time}}</td>
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