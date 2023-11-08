<!-- 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('login.css')}}">
    <title>Eurosia Login</title>
</head>
<body>

    <style>

input:-internal-autofill-selected {
    -webkit-box-shadow: 0 0 0 1000px #ecf0f3 inset !important;
    box-shadow: 0 0 0 1000px #ecf0f3 inset !important;
    background-color: #ecf0f3 !important;
    color: #ecf0f3 !important;

}

    </style>
   
    <form action="{{ isset($guard) ? url($guard.'/login'): route('login')}}" method="post">
        @csrf
        <div class="py-5 container">
            <div class="login-div">
                <div class="logo">
                    
                    <img src="{{ asset('login.png') }}" alt="Eurosia School Management logo" />
                </div>
                
                <div class="title">Eurosia School Management</div>
                <div class="sub-title">Login form</div>
                
                <div class="fields">
                    <div class="username">
                        <input type="email" class="user-input" placeholder="Email" name='email'/>
                    </div>
                    <h5 class="errormessage"></h5>
                    <div class="password">
                        <input type="password" class="pass-input" placeholder="Password" name='password'/>
                    </div>
                
                </div>
                <button type="submit" class="btn btn-primary sigin-button mt-4">Log In</button>

                <div class="forgetPass">
                    <a href="{{route('register')}}">Sing Up </a>
                    <a href="{{route('password.request')}}">Forget Password </a>
                </div>
            </div>


        </div>
    </form>
</body>
</html> -->





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href=" {{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Login</b>Form</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form  action="{{ isset($guard) ? url($guard.'/login'): route('login')}}" method="post">
      @csrf
        <div class="input-group mb-3">
          <input name='email' type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name='password' type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

<!--       <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{route('password.request')}}">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="{{route('register')}}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
