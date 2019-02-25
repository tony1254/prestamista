<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @yield('library')

    @yield('head')

    <!-- CSRF Token
npm install --save toastr
   -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}
        @yield('title')
    </title>
</head>

<body class="grey  lighten-2  fixed-sn mdb-skin theme-indigo">
<div id="app">


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
          <p>Espere Por Favor...</p>
      </div>
  </div>
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->
  <!-- Search Bar -->
  <div class="search-bar">
      <div class="search-icon">
          <i class="material-icons">search</i>
      </div>
      <input type="text" placeholder="BUSCAR...">
      <div class="close-search">
          <i class="material-icons">close</i>
      </div>
  </div>
  <!-- #END# Search Bar -->
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
            <section class="content">

                @yield('content')



            </section>

        </main>
        </div>
        <!-- /main -->
        <!-- FOOTER -->
        @yield('footer')
        <!-- /FOOTER -->
        <!-- SCRIPTS -->
        <!-- Scripts -->

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="js/toastr.min.js" defer></script>

        	<!-- <script src="https://code.jquery.com/jquery-1.11.3.js"></script> -->
        	<!-- <script src="https://raw.githubusercontent.com/CodeSeven/toastr/master/build/toastr.min.js"></script> -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">
    $(function() {
        console.log( "ready!" );
        toastr.error('Are you the 6 fingered man?');
        // $('#element').toast('show')
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
