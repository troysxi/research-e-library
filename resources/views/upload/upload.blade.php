<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>BulSU-SC Research Management System</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
  <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{URL::asset('css3/upload.css')}}">

</head>

<body>

  <div class="container">

    <div class="row">
      <div id="login">
          <span class="fa fa-upload"></span>
          <div class="text-center">
    				<h1><strong>Upload Softcopy</strong></h1>
    			</div>

      <form name="form-login" action="{{ route('upload.file', $record->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}


        <input type="file" name="file"></input>

        <input type="submit" class="btn btn-info" value="Upload"></input>

      </form>

    </div>

  </div>
</div>

</body>

</html>
