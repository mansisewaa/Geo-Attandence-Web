<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>  @yield('title') </title>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
 
<div class="wrapper">

      <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>HUMAN RESOURCE MANAGEMENT</h3>
        </div>

        <ul class="list-unstyled components">
            <p>ADMIN</p>
            <li>
            <a href="/dashboard">Dashboard
            </a>
            </li>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">User</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                    <a href="/role-register">User Profie </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employee</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                    <a href="{{route('employee.Edetails')}}">
                      Employee Profile
                    </a>
                    </li>
                    <li>
                    <a href="{{route('employee.Atten')}}">Attendance</a>
           
                    </li>
                    <li>
                    <a href="./leave"> Leave Applications</a>
            
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
  </nav>
  <!-- Page Content -->
  <div id="content">
      <!-- We'll fill this with dummy content -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        
            <ul class="navbar-nav justify-content-end">
             <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                  Hello, Admin
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li><a class="dropdown-item" href="{{ route('home') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                 </li>   
                </ul>
              </div>
               

        </div>
    </nav>
    <div class="content">
            
            @yield('content')
 
         </div>
         

  </div>
</div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    @yield('scripts')
</body>

</html>