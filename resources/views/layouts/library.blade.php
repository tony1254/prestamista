@section('library')
<!-- library inicio -->
  <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


{{-- <link rel="shortcut icon" href="{{url("/content/favicon/favicon.png")}}" type="image/x-icon"> --}}
{{-- <link rel="icon" href="{{url("/content/favicon/favicon.png")}}" type="image/x-icon"> --}}
<link rel="apple-touch-icon" sizes="57x57" href="{{url("/content/favicon/apple-icon-57x57.png")}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{url("/content/favicon/apple-icon-60x60.png")}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{url("/content/favicon/apple-icon-72x72.png")}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{url("/content/favicon/apple-icon-76x76.png")}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{url("/content/favicon/apple-icon-114x114.png")}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{url("/content/favicon/apple-icon-120x120.png")}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{url("/content/favicon/apple-icon-144x144.png")}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{url("/content/favicon/apple-icon-152x152.png")}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{url("/content/favicon/apple-icon-180x180.png")}}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{url("/content/favicon/android-icon-192x192.png")}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{url("/content/favicon/favicon-32x32.png")}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{url("/content/favicon/favicon-96x96.png")}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{url("/content/favicon/favicon-16x16.png")}}">
<link rel="manifest" href="{{url("/content/favicon/manifest.json")}}">
<meta name="msapplication-TileColor" content="#3f51b5">
<meta name="msapplication-TileImage" content="{{url("/content/favicon/ms-icon-144x144.png")}}">
<meta name="theme-color" content="#3f51b5">
<link rel="stylesheet" href="/fonts/iconfont/material-icons.css">
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

  <!--  estilos modificados -->
  <STYLE TYPE="text/css" MEDIA=screen>
  /* 760 */
  .navbar-brand > img.logoImage  {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    overflow: hidden;
    margin-top: -12px;
    margin-left: 15px;
  }
  .navbar-brand-text{
    color:rgb(255, 255, 255);
    font-family:Roboto, sans-serif;
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
  }
  .navbar-brand-text:hover{
  color:rgb(255, 255, 255);
    text-decoration: none;
}

  @media only screen and (max-width: 760px) {
    .navbar-brand > img.logoImage {
    margin-left: 45%;
    }
    .navbar-brand-text{
    display: none;
    }
  }

    @media only screen and (max-width: 280px) {
      .navbar-brand > img.logoImage {
      margin-left: 30%;
      }
    }

  </style>

</head>

    <!--Library FIN  -->
@endsection
