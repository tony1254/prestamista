@extends('layouts.app')

@section('content')

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="card">
                                            <div class="header">
                                                <h2>
                                                    BASIC TABLES
                                                    <small>Click effect inspired by Google's Material Design. Taken by <a href="http://fian.my.id/Waves/" target="_blank">fian.my.id/Waves</a></small>
                                                </h2>
                                                <ul class="header-dropdown m-r--5">
                                                    <li class="dropdown">
                                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
<div class="body">
                                            <main-component></main-component>




                                            @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            @endif

                                            @if(Auth::user()->hasRole('admin'))
                                                <div>Acceso como administrador</div>
                                            @else
                                                <div>Acceso usuario</div>
                                            @endif
                                            You are logged in!



                                            <div class="body table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>FIRST NAME</th>
                                                            <th>LAST NAME</th>
                                                            <th>USERNAME</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Larry</td>
                                                            <td>Jellybean</td>
                                                            <td>@lajelly</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Larry</td>
                                                            <td>Kikat</td>
                                                            <td>@lakitkat</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        </div>
                                        </div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>LINE CHART</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                          <div id="myfirstchart" style="height: 250px;">aa</div>

                        </div>
                    </div>
                </div>




@endsection
@section('scripts')



@endsection
