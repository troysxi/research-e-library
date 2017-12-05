    <!DOCTYPE html>
    <html lang="en">

    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Research E-Library / Home  </title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{URL::asset('css3/style.css')}}">

      <!-- Bootstrap core CSS -->
      <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

      <!-- Custom fonts for this template -->
      <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

      <!-- Custom styles for this template -->
      <link href="{{URL::asset('css/agency.min.css')}}" rel="stylesheet">

    </head>

    <body id="page-top">

      <!-- Navigation -->
        <div class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
              <img src="images/bulsu.png" alt="">
              <div class="container">

                <a class="navbar-brand js-scroll-trigger" href="#page-top"><strong>Research E-Library</strong></a>
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

      <!-- Header -->
      <header class="masthead">
        <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"></div>
            <div class="intro-heading"></div>
               <div class="form-group text-center">
                          {!! Form::open(['url' => 'search', 'method' => 'get'])!!}
                           <input class="form-control fa fa-search float-right" type ="text-center" name="q" placeholder="Search Titles ...."><span class="fa fa-search float-right"></span></input>
                          {!! Form::close() !!}
                </div>
          
          </div>
        </div>
      
      </header>


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
                <a href="https://web.facebook.com/Bulsu-SC-Research-E-Library-131406404210138/?modal=admin_todo_tour">
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
                      <p> >> We do not give the research documents without the authorization of the research office.</p>
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

  <!--           
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
 -->
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
