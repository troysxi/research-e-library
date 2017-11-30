<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
      <link href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{URL::asset('css3/style.css')}}">

</head>

<body>

    <div id="login">
      <div class="text-center">
				<h1><strong>Admin</strong></h1>
			</div>

      <form name='form-login'>
        <span class="fa fa-user"></span>
          <input type="text" name="username" placeholder="Username">

        <span class="fa fa-lock"></span>
          <input type="password" name="password" placeholder="Password">

        <input type="submit" value="Login">
        <br>
        <br>
      <a href="/"><button class="fa fa-close" type="button" name="button">Cancel</button></a>
        </form>
      </div>
</body>
</html>
