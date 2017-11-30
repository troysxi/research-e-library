<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Research Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{URL::asset('css/agency.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <img src="images/bulsu.png" alt="">
    <div class="container">

      <a class="navbar-brand js-scroll-trigger" href="#page-top">Research Library</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link js-scroll-trigger " href="#services">FEATURES</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
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
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"></div>
        <div class="intro-heading"></div>
        <a class="btn btn-xl js-scroll-trigger" href="#services">Tell Me More</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading" >Features</h2>
          <h3 class="section-subheading text-muted">Explore the features of Bulacan State University Sarmiento Campus Research Management System.</h3>
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
          <p class="text-muted">Look and read research documents.</p>
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
  </section>

  <!-- Portfolio Grid
  <section class="bg-light" id="portfolio">
  <div class="container">
  <div class="row">
  <div class="col-lg-12 text-center">
  <h2 class="section-heading">Gallery</h2>
  <h3 class="section-subheading text-muted">Bulacan State University Photos</h3>
</div>
</div>
<div class="row">
<div class="col-md-4 col-sm-6 portfolio-item">
<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
<div class="portfolio-hover">
<div class="portfolio-hover-content">
<i class="fa fa-plus fa-3x"></i>
</div>
</div>
<img class="img-fluid" src="{{URL::asset('img/portfolio/bulsu.jpg')}}" alt="">
</a>
<div class="portfolio-caption">
<h4>Main Gate</h4>
<p class="text-muted">Entrance and Exit Gate</p>
</div>
</div>
<div class="col-md-4 col-sm-6 portfolio-item">
<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
<div class="portfolio-hover">
<div class="portfolio-hover-content">
<i class="fa fa-plus fa-3x"></i>
</div>
</div>
<img class="img-fluid" src="{{URL::asset('img/portfolio/images.jpg')}}" alt="">
</a>
<div class="portfolio-caption">
<h4>History of BulSu-SC</h4>
<p class="text-muted">Started 1998</p>
</div>
</div>
<div class="col-md-4 col-sm-6 portfolio-item">
<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
<div class="portfolio-hover">
<div class="portfolio-hover-content">
<i class="fa fa-plus fa-3x"></i>
</div>
</div>
<img class="img-fluid" src="{{URL::asset('img/portfolio/foundation.jpg')}}" alt="">
</a>
<div class="portfolio-caption">
<h4>Foundation Day</h4>
<p class="text-muted">Celebrating 2016 Foundation Day</p>
</div>
</div>
<div class="col-md-4 col-sm-6 portfolio-item">
<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
<div class="portfolio-hover">
<div class="portfolio-hover-content">
<i class="fa fa-plus fa-3x"></i>
</div>
</div>
<img class="img-fluid" src="{{URL::asset('img/portfolio/free_tuition2.jpg')}}" alt="">
</a>
<div class="portfolio-caption">
<h4>Free Tuition Fee</h4>
<p class="text-muted">Free Tuition fee in every state Universities over the Philippines</p>
</div>
</div>
<div class="col-md-4 col-sm-6 portfolio-item">
<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
<div class="portfolio-hover">
<div class="portfolio-hover-content">
<i class="fa fa-plus fa-3x"></i>
</div>
</div>
<img class="img-fluid" src="{{URL::asset('img/portfolio/planning_20172.jpg')}}" alt="">
</a>
<div class="portfolio-caption">
<h4>Planning for 2017</h4>
<p class="text-muted">Mid-year evaluation and planning for 2017</p>
</div>
</div>
<div class="col-md-4 col-sm-6 portfolio-item">
<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
<div class="portfolio-hover">
<div class="portfolio-hover-content">
<i class="fa fa-plus fa-3x"></i>
</div>
</div>
<img class="img-fluid" src="{{URL::asset('img/portfolio/sarmiento2.jpg')}}" alt="">
</a>
<div class="portfolio-caption">
<h4>BulSUAN</h4>
<p class="text-muted">Officers</p>
</div>
</div>
</div>
</div>
</section>
-->

<!-- About -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">About</h2>
        <h3 class="section-subheading text-muted">About Research Management System.</h3>
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
  </section>

  <!-- Team
  <section class="bg-light" id="team">
  <div class="container">
  <div class="row">
  <div class="col-lg-12 text-center">
  <h2 class="section-heading">Research Management Officer</h2>
  <h3 class="section-subheading text-muted">This Officer take the responsibility to make your research very valuable.</h3>
</div>
</div>
<div class="row">
<div class="col-sm-4">
<div class="team-member">
<img class="mx-auto rounded-circle" src="{{URL::asset('img/team/gascon.jpg')}}" alt="">
<h4>Dr. Cecilia N. Gascon</h4>
<p class="text-muted">Research Office President</p>
<ul class="list-inline social-buttons">
<li class="list-inline-item">
<a href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-linkedin"></i>
</a>
</li>
</ul>
</div>
</div>


<div class="col-sm-4">
<div class="team-member">
<img class="mx-auto rounded-circle" src="{{URL::asset('img/team/geronimo.jpg')}}" alt="">
<h4>Dr. Cecilia Geronimo</h4>
<p class="text-muted">Reseach Office Vice President</p>
<ul class="list-inline social-buttons">
<li class="list-inline-item">
<a href="twitter.com">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a href="free.facebook.com">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a href="lin">
<i class="fa fa-linkedin"></i>
</a>
</li>
</ul>
</div>
</div>

<div class="col-sm-4">
<div class="team-member">
<img class="mx-auto rounded-circle" src="{{URL::asset('img/team/jenina.jpg')}}" alt="">
<h4>Ms. Jenina Tongol</h4>
<p class="text-muted">Director of Research Office</p>
<ul class="list-inline social-buttons">
<li class="list-inline-item">
<a href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-linkedin"></i>
</a>
</li>
</ul>
</div>
</div>

<div class="col-sm-4">
<div class="team-member">
<img class="mx-auto rounded-circle" src="{{URL::asset('img/team/babes.jpg')}}" alt="">
<h4>Dr. Marites M. Valendez</h4>
<p class="text-muted">Research Coordinator</p>
<ul class="list-inline social-buttons">
<li class="list-inline-item">
<a href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-linkedin"></i>
</a>
</li>
</ul>
</div>
</div>

<div class="col-sm-4">
<div class="team-member">
<img class="mx-auto rounded-circle" src="{{URL::asset('img/team/3.jpg')}}" alt="">
<h4>Ms. Marina Saygaw</h4>
<p class="text-muted">Research Assitant Coodinator</p>
<ul class="list-inline social-buttons">
<li class="list-inline-item">
<a href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-linkedin"></i>
</a>
</li>
</ul>
</div>
</div>

<div class="col-sm-4">
<div class="team-member">
<img alt ="sample-text" class="mx-auto rounded-circle" src="{{URL::asset('img/team')}}" alt="">
<h4>Mr. Sharwin Nonato</h4>
<p class="text-muted">Secretary</p>
<ul class="list-inline social-buttons">
<li class="list-inline-item">
<a href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li class="list-inline-item">
<a href="#">
<i class="fa fa-linkedin"></i>
</a>
</li>
</ul>
</div>
</div>

<div class="row">
<div class="col-lg-8 mx-auto text-center">
<p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
</div>
</div>
</div>
</section>
-->

<!-- Contact -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Contact Us</h2>
        <h3 class="section-subheading text-muted">Send Your Concern Here ! @BulSU-SC E-Research Library</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="sendMessageButton" class="btn btn-xl" type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">

      <div class="col-md-2">
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a href="#">
              <i class="fa fa-map"></i>
            </a>
          </li>
          University Heights, Brgy. Kaypian, CSJDM, Bulacan
        </ul>
      </div>

      <div class="col-md-2">
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          BulSU-SC E-Library
        </ul>
      </div>


          <div class="col-md-2">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a class="fa fa-phone" href="#" >
                </a>
                  +639353001265
              </li>

            </ul>
          </div>

        <div class="col-md">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
                <span class="copyright">Copyright &copy; BulSU-SC E-Library 2017</span>
                <br>
              <a data-toggle="modal" href="#portfolioModal1">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a data-toggle="modal" href="#portfolioModal2">Terms of Use</a>
            </li>
          </ul>
        </div>

        </div>
      </div>
    </footer>
    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Privacy Policy</h2>
                  <p class="item-intro text-muted">Main gate of Sarmiento Campus.</p>
                  <p>asldhalshdlakshdlkasd!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Main Entrance</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal 2 -->
      <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-8 mx-auto">
                  <div class="modal-body">
                    <!-- Project Details Go Here -->
                    <h2>Term Of Use</h2>
                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                    <ul class="list-inline">
                      <li>Date: January 2017</li>
                      <li>Client: Explore</li>
                      <li>Category: Graphic Design</li>
                    </ul>
                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                      <i class="fa fa-close"></i>
                      Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal 3 -->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                  <div class="rl"></div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-8 mx-auto">
                    <div class="modal-body">
                      <!-- Project Details Go Here -->
                      <h2>BulSU Foundation Day</h2>
                      <p class="item-intro text-muted">2016 foundation day of Bulacan State University.</p>
                      <img class="img-fluid d-block mx-auto" src="{{URL::asset('img/portfolio/2016_foundation.jpg')}}" alt="">
                      <p>ajkshdahsdkj</p>
                      <ul class="list-inline">
                        <li>Date: January 2016</li>
                        <li>Client: BulSU</li>
                        <li>Category: Holiday</li>
                      </ul>
                      <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fa fa-times"></i>
                        Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal 4 -->
          <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                  <div class="lr">
                    <div class="rl"></div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8 mx-auto">
                      <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2>Free Tuition for All Universities</h2>
                        <p class="item-intro text-muted">Free Tuition for every state universities in the Philippines.</p>
                        <img class="img-fluid d-block mx-auto" src="{{URL::asset('img/portfolio/free_tuition.jpg')}}" alt="">
                        <p>ajskdhaksjhd</p>
                        <ul class="list-inline">
                          <li>Date: January 2017</li>
                          <li>Client: BulSU</li>
                          <li>Category: Announcement</li>
                        </ul>
                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                          <i class="fa fa-times"></i>
                          Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal 5 -->
            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                      <div class="rl"></div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                          <!-- Project Details Go Here -->
                          <h2>Project Name</h2>
                          <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <img class="img-fluid d-block mx-auto" src="{{URL::asset('img/portfolio/planning_2017.jpg')}}" alt="">
                          <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                          <ul class="list-inline">
                            <li>Date: January 2017</li>
                            <li>Client: Southwest</li>
                            <li>Category: Website Design</li>
                          </ul>
                          <button class="btn btn-primary" data-dismiss="modal" type="button">
                            <i class="fa fa-times"></i>
                            Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal 6 -->
              <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                      <div class="lr">
                        <div class="rl"></div>
                      </div>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-8 mx-auto">
                          <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="{{URL::asset('img/portfolio/sarmiento.jpg')}}" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <ul class="list-inline">
                              <li>Date: January 2017</li>
                              <li>Client: Window</li>
                              <li>Category: Photography</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                              <i class="fa fa-times"></i>
                              Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Bootstrap core JavaScript -->
                <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
                <script src="{{URL::asset('vendor/popper/popper.min.js')}}"></script>
                <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

                <!-- Plugin JavaScript -->
                <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

                <!-- Contact form JavaScript -->
                <script src="{{URL::asset('js/jqBootstrapValidation.js')}}"></script>
                <script src="{{URL::asset('js/contact_me.js')}}"></script>

                <!-- Custom scripts for this template -->
                <script src="{{URL::asset('js/agency.min.js')}}"></script>

              </body>
              </html>
