
@extends('layouts.master')


@section('title')
    Dashboard
 @endsection



@section('content')
<div class="card text-center">
  <div class="card-header">
   <h1> User Details</h1>
  </div>
  <div class="card-body">
  <div class="container">
        
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered border border-2">
            
                        
                <thead class=" thead-dark">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Usertype</th>
                </thead>
                
                <tbody>
                    @foreach( $users as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->usertype }}</td>
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