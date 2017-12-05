<!DOCTYPE html>
<html>
<head>
  <!-- Bootstrap core CSS -->
  <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{URL::asset('css/agency.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <script scr="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <title>Research Management System</title>
</head>

<body>

  <!-- Navigation -->
  <div class="container">
    <div class="row">
      <div class="panel-default panel panel-primary">
        <div class="panel-heading text-center">
          <b>Research Library</b><br>
        </div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class= "nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <b>Admin</b>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                    <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
                    <a class="dropdown-item" href="{{route('logins.index')}}">Accounts</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>


        @yield('content')

        <!-- Bootstrap core JavaScript -->
        <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{URL::asset('vendor/popper/popper.min.js')}}"></script>
        <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
      </div>
    </div>
  </div>
</body>
</html>
