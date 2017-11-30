<!DOCTYPE html>
<html>
<head>
  <title>Search</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script scr="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <style type="text/css">
  body{
    padding: 10px;
  }
  .loading{
    position:absolute;
    top:50%;
    left:50%;
    display: none;
  }
  .loading-bar{
    display: inline-block;
    width: 4px;
    height: 18px;
    border-radius: 4px;
    animation: loading 1s ease-in-out infinite;
  }
  .loading-bar:nth-child(1){
    background-color: #3498bd;
    animation-delay: 0;
  }
  .loading-bar:nth-child(2){
    background-color: #c0392b;
    animation-delay: 0.09s;
  }
  .loading-bar:nth-child(3){
    background-color: #f1c40f;
    animation-delay: .18s;
  }
  .loading-bar:nth-child(4){
    background-color: #27ac60;
    animation-delay: .27s;
  }
  @keyframes loading {
    0%{
      transform: scale(1);
    }
    20%{
      transform: scale(1,2.2);
    }
    40%{
      transform: scale(1);
    }
  }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="panel-default">
        <div class="panel-heading">
          <b>Research Documents</b>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <input class="form-control" name="search" id="search" placeholder="Search Titles ...."></input>
          </div>
          <div class="table-responsive">
            <div class="loading">
              <div class="loading-bar"></div>
              <div class="loading-bar"></div>
              <div class="loading-bar"></div>
            </div>

            <table class="table table-hover table-bordered table-condensed">
              <thead>
                <tr>
                  <th>    ID   </th>
                  <th>    Title </th>
                  <th>    Faculty</th>
                  <th>    Researchers  </th>
                  <th>    Date  </th>
                  <th>    Action  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>asdasd</td>
                  <td>asdasdasd</td>
                  <td>asdasdasd</td>
                  <td>asdasdasd</td>
                  <td>asdasd</td>
                  <td>

                    <a class="btn btn-info" href="">Read More</a>
                    <a class="btn btn-info pull-right" href="">Download</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
  </html>
