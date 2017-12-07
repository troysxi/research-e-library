<!DOCTYPE html>
<html >
<head>



   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Admin / Login  </title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{URL::asset('css3/style.css')}}">

      <!-- Bootstrap core CSS -->
      <link href="{{URL::asset('vendor/bootstrap/css/login.min.css')}}" rel="stylesheet">

      <!-- Custom fonts for this template -->
      <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

      <!-- Custom styles for this template -->
      <link href="{{URL::asset('css/agency.min.css')}}" rel="stylesheet">

</head>

<body>

      <!-- Flash Message -->
      @if (Session::has('flash_message'))
      <div class="alert alert-danger">{{Session::get('flash_message')}}</div>
      @endif

      <div class="text-center">
        <br>
				<h1>Admin Login</h1>
			</div>
      <form name='form-login' action="{{ route('postLogin') }}" method="post">
        {!! csrf_field() !!}
        <br>
        <span class="fa fa-user"></span>
          <input type="text" name="username" placeholder="Username" ><br>
          <br>
        <span class="fa fa-lock"></span>
          <input type="password" name="password" placeholder="Password"><br>
          <br>

        <input class="btn btn-success" type="submit" value="Login">
        <br>
        <br>
      <a href="/"><button class=" btn btn-danger fa fa-close" type="button" name="button">Cancel</button></a>
        </form>

</body>
</html>
