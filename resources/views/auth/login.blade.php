

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css"> -->
      <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"> -->
      <link rel="stylesheet" href="/fonts/iconfont/material-icons.css">

      <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>

<body class="login-page  bg-indigo">
    <div class="login-box">
            <div class="card">
                        <div class="body">
               <form id="sign_in" method="POST" action="{{ route('login') }}">
                 @csrf

                   <div class="msg">{{ __('Login') }}</div>
                   <div class="input-group">
                       <span class="input-group-addon">
                           <i class="material-icons">person</i>
                       </span>
                       <div class="form-line">
                           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="ejemplo@ejemplo.com" required autofocus>
                           @if ($errors->has('email'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                           @endif
                           <!-- <input type="text" class="form-control" name="username" placeholder="Username" required autofocus> -->
                       </div>
                   </div>
                   <div class="input-group">
                       <span class="input-group-addon">
                           <i class="material-icons">lock</i>
                       </span>
                       <div class="form-line">
                           <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña"  required>
                           @if ($errors->has('password'))
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $errors->first('password') }}</strong>
                               </span>
                           @endif
                           <!-- <input type="password" class="form-control" name="password" placeholder="Password" required> -->
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-xs-8 p-t-5">
                         <input class="checkbox" type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink" {{ old('remember') ? 'checked' : '' }}>

                         <label class="" for="remember">
                             {{ __('Remember Me') }}
                         </label>

                           <!-- <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                           <label for="rememberme">Remember Me</label> -->
                       </div>
                       <div class="col-xs-4">
                           <button class="btn btn-block bg-pink waves-effect" type="submit">  {{ __('Login') }}</button>
                       </div>
                   </div>
                   <div class="row m-t-15 m-b--20">
                       <div class="col-xs-6">
                           <a href="sign-up.html">Register Now!</a>
                       </div>
                       <div class="col-xs-6 align-right">
                         @if (Route::has('password.request'))
                             <a class="btn btn-link" href="{{ route('password.request') }}">
                                 {{ __('Forgot Your Password?') }}
                             </a>
                         @endif
                           <!-- <a href="forgot-password.html">Forgot Password?</a> -->
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>

</body>

</html>
