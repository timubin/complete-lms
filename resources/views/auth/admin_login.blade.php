<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('login.css')}}">
    <title>Euroisa Technology limited</title>
</head>
<body>

    <style>
   input:internal-autofill-selected {
      appearance: menulist-button;
      background-image: none !important;
      background-color: -internal-light-dark(rgb(232, 240, 254), rgba(70, 90, 126, 0.4)) !important;
      color: fieldtext !important;
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
                        <input type="username" class="user-input" placeholder="Email" name='email'/>
                    </div>
                    <h5 class="errormessage"></h5>
                    <div class="password">
                        <input type="password" class="pass-input" placeholder="Password" name='password'/>
                    </div>
                
                </div>
                <button type="submit" class="btn btn-primary sigin-button mt-4">Log In</button>
            </div>

  
        </div>
    </form>
</body>
</html>