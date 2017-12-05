<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Research E-Library / About  </title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{URL::asset('css3/style.css')}}">

      <!-- Bootstrap core CSS -->
      <link href="{{URL::asset('vendor/bootstrap/css/about_bootstrap.min.css')}}" rel="stylesheet">

      <!-- Custom fonts for this template -->
      <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

      <!-- Custom styles for this template -->
      <link href="{{URL::asset('css/about.min.css')}}" rel="stylesheet">

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
	                <a class="nav-link js-scroll-trigger " href="{{route('features')}}">FEATURES</a>
	              </li>

	              <li class="nav-item">
	                <a class="nav-link js-scroll-trigger" href="{{route('about')}}">About</a>
	              </li>


	              <li class="nav-item dropdown">
	                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                  Admin
	                </a>
	                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
	                  <a class="dropdown-item" href="{{URL::asset('login')}}">Log in</a>
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
            <h2 class="section-heading">About</h2>
            <a class="section-subheading text-muted">About Research Management System.</a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="{{URL::asset('img/r1.jpg')}}">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">

                    <h4 class="subheading">About our website</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Online BulSU SC Research Library  is a Research Office online Record Management System  (RMS). Web-based system that allows the office to conveniently and securely manage  the research material collections in which any web-connected device such as computer, laptop, and smartphone can access. BulSU student or even those who are from outside the campus can browse through the website and access the research materials uploaded by the research office administrators/coordinators in a limitted way. Only the BulSU student can get the actual research file by preceeding first to the Research Office for the coordinator to verify the authenticity of a student as a BulSUan.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="{{URL::asset('img/r2.jpg')}}" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4></h4>
                    <h4 class="subheading">Mission</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Tasked to help promote quality education and improve the productive capacity of the people in the service areas and guided by the policies and thrust of the institution and the regional and national develpment goals.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="{{URL::asset('img/r3.jpg')}}" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4></h4>
                    <h4 class="subheading">Vision</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">The BulSU-SC Research Office aspires to be a truly dynamic and production source of knowledge making significant contributions to the development of technology directed, innovative, creative and quality researchers relevant to the ever changing socio-economic development needs of the communicaties and institutions that it serves.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="{{URL::asset('img/r4.jpg')}}" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4></h4>
                    <h4 class="subheading">Goals</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">To actualize it's mission within the next five years, the BulSU-SC Research Office Commits itself to the following goals: <br> 1. Initiate efforts at upgrading faculty and personel competency in conducting and reporting quality reporting quality researches and development projects; <br> 2. Set-up an information system and data bank; <br> 3. Assist faculty and personnel who are in the process of writing research reports; <br> 4. Disseminate and publish research findings and other relevant information.  </p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                  </div>
                </li>
              </ul>
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