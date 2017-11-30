<!DOCTYPE html>
<html>
<head>
  <title>BulSu-SC Research Library</title>

  <link href="{{URL::asset('css3/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::asset('http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->

  <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <script scr="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="panel-default panel panel-primary">
        <div class="panel-heading text-center">
          <b>Research Materials</b><br>
        </div>

        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{url('/')}}" id="navbarDropdownPortfolio">
                    Home
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

        <div class="panel-body">
          <div class="form-group text-center">
            {!! Form::open(['url' => 'search', 'method' => 'get'])!!}
              <input class="form-control" type ="text" name="q" placeholder="Search Titles ...."></input><br>
            {!! Form::close() !!}
          </div>

          @if (Session::has('flash_message'))
          <div class="alert alert-success">{{Session::get('flash_message')}}</div>
          @endif

          @if(request()->has('q'))

          <div class="table-responsive">
            <table class="table table-hover table-bordered table-condensed text-center">
              <thead>
                <tr>
                  <th class="text-center">   ID         </th>
                  <th class="text-center">   Title      </th>
                  <th class="text-center">   Faculty    </th>
                  <th class="text-center">   Researcher </th>
                  <th class="text-center">   Year       </th>
                  <th class="text-center">   Action     </th>
                </tr>
              </thead>

              <tbody>
                @foreach($records as $records)
                <tr>
                  <td>{{ $records->id }}</td>
                  <td>{{ $records->Title }}</td>
                  <td>{{ $records->Faculty }}</td>
                  <td>{{ $records->Researcher }}</td>
                  <td>{{ $records->created_at->year }}</td>

                  <td>
                    <a class="btn btn-info" href="{{route('record.show',$records->id)}}">Read More</a><br><br>

                    <a data-toggle="modal" href="#portfolioModal1">
                      <button type="button" class="btn btn-primary">
                        <i class="glyphicon glyphicon-download">
                          Download
                        </i>
                      </button>
                    </a>

                  </tr>
                </tbody>

                @endforeach
              </table>
              <div class="pull-left text-center">
              <div class="col-md-4">
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a href="/list_record">
                        <i class="fa fa-backward"></i>
                      </a>
                    </li>
                  </ul>
              </div>
            </div>

            <div class="pull-right text-center">
              <div class="col-md-4">
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a href="">
                        <i class="fa fa-forward"></i>
                      </a>
                    </li>
                  </ul>
              </div>
            </div>

            </div>

          </div>
          @endif
        </div>

      </div>


      <!--modal-->
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
                <div class="col-lg-5 text-center">
                  <div class="modal-body">
                    <!-- Project Details Go Here -->
                    <h2>Confidential Documents</h2>
                    <p class="item-intro text-muted">Instruction To Download.</p>
                    <p>Please Present your ID to Bulacan State University <br> Sarrmiento Campus Research Office</p>

                    <button class="btn btn-danger" data-dismiss="modal" type="button">
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


      </body>
      </html>
