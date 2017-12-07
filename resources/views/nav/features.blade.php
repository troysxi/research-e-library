<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Research E-Library / Features  </title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{URL::asset('css3/style.css')}}">

      <!-- Bootstrap core CSS -->
      <link href="{{URL::asset('vendor/bootstrap/css/features_bootstrap.min.css')}}" rel="stylesheet">

      <!-- Custom fonts for this template -->
      <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

      <!-- Custom styles for this template -->
      <link href="{{URL::asset('css/features.min.css')}}" rel="stylesheet">

	</head>


	<body>

<!--navigation-->

		<div class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
	       <img src="images/bulsu.png" alt="">
	        <div class="container">

	          <a class="navbar-brand js-scroll-trigger" href="{{route('landing_page')}}"><strong>Research E-Library</strong></a>
	          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	            Menu
	            <i class="fa fa-bars"></i>
	          </button>
	          <div class="collapse navbar-collapse" id="navbarResponsive">
	            <ul class="navbar-nav ml-auto">
	              <li class="nav-item ">
	                <a class="nav-link js-scroll-trigger " href="{{route('features')}}"><strong>FEATURES</strong></a>
	              </li>

	              <li class="nav-item">
	                <a class="nav-link js-scroll-trigger" href="{{route('about')}}"><strong>About</strong></a>
	              </li>

	         

	              <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  <strong>Admin</strong>
	                </a>
	                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
	                  <a class="dropdown-item" href="{{URL::asset('login')}}"><strong>Log in</strong></a>
	                </div>
	              </li>

	            </ul>
	          </div>
	        </div>
	      </div>
<!--end navigation-->


		 <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading" >Features</h2>
              <a class="section-subheading text-muted">Explore the FEATURES of Bulacan State University Sarmiento Campus Research E-Library.</a>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md">
              <span class="fa-stack fa-5x">
                <i class="fa fa-circle fa-stack-2x text-info"></i>
                <i class="fa fa-book fa-stack-1x fa-inverse"></i>
              </span>
              <br>
              <a class="btn btn-success" href="{{route('list.record')}}">Research Library</a>
              <p class="text-muted">Search your related topics here.</p>
            </div>
            <div class="col-md">
              <span class="fa-stack fa-5x">
                <i class="fa fa-circle fa-stack-2x text-info"></i>
                <i class="fa fa-edit fa-stack-1x fa-inverse"></i>
              </span>
              <br>
              <a class="btn btn-success" href="{{route('template.index')}}">Templates and Tools</a>
              <p class="text-muted">You can create here your own research documents.</p>
            </div>
          </div>
        </div>


         <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{URL::asset('vendor/popper/popper.min.js')}}"></script>
        <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

        <!-- Plugin JavaScript -->
        <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for this template -->
        <script src="{{URL::asset('js/agency.min.js')}}"></script>



	</body>


</html>