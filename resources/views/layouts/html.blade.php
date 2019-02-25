<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @yield('library')
    <link rel="stylesheet" href="/fonts/iconfont/material-icons.css">

    @yield('head')
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token
npm install --save toastr
   -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}
        @yield('title')
    </title>
</head>

<body class="grey  lighten-2  fixed-sn mdb-skin theme-indigo">
  <!-- Page Loader -->
  <div class="page-loader-wrapper">
      <div class="loader">
          <div class="preloader">
              <div class="spinner-layer pl-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
          <p>Please wait...</p>
      </div>
  </div>
  <!-- #END# Page Loader -->
    @yield('alert')
    @yield('navbar')

        <p></p>
        <!-- main -->
        <!--Main layout-->
        <main>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif {!! Alert::render() !!}
            <!--Error message-->
            <div class="container card cascading-admin-card " style="width:100%; height:100%;">
                @yield('content')
                <br>
                <br>
            </div>
        </main>
        <!-- /main -->
    </div>
    <!-- FOOTER -->
    @yield('footer')
    <!-- /FOOTER -->
    <!-- SCRIPTS -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    	<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<script type="text/javascript">
$(function() {
    console.log( "ready!" );
    toastr.error("ready!" );
    $('#element').toast('show')
});

</script>

    @yield('script')
</body>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <script type="text/javascript">
        $(function() {
            toastr.error('{{ $error }}.')
        });
        </script>
        @endforeach
    </ul>
</div>
@endif

</html>
