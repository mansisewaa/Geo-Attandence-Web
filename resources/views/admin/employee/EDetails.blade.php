
@extends('layouts.master')


@section('title')
   Employee Details
 @endsection



@section('content')

<div class="card text-center">
  <div class="card-header">
    <h1> Employee Details</h1>
    <ul class="nav nav-pills card-header-pills">
        <li class="nav-item">
            <a class="nav-link active" href="{{route('employee.create')}}"  type="submit" class= "btn btn-primary">
                    New Employee
                </a>
        </li>
     </ul>
  </div>
  
    <div class="card-body">
        <div class="container">
                
            <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered border border-2">
                <thead class="thead-dark">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">DOB</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Number</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Joined</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Update</th>
                </thead>
                
                <tbody>
                @foreach ($employees as $data)
                
                <tr class="tr">
                    <td class="text-center">{{ $data ->id }}</td>
                    <td class="text-center">{{ $data ->fname}} {{$data ->lname }}</td>
                    <td class="text-center">{{ $data ->birth}}</td>
                    <td class="text-center">{{ $data ->Email}}</td>
                    <td class="text-center">{{ $data ->number}}</td>
                    <td class="text-center">{{ $data ->Address}},
                        {{ $data ->city}},
                        {{ $data ->state}},
                        {{ $data ->zip}}
                    </td>
                    <td class="text-center">{{ $data ->started_at}}</td>
                    <td class="text-center">{{ $data ->password}}</td>
                    <td class="text-center">
                        <a href="{{route('employee.edit',$data->id)}}" type="submit" class="btn btn-primary btn-sm">Update </a>  
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