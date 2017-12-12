<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" sizes="32x32" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Weight Killer') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

    <!-- Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>

<div class="container">
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Weight Killer') }}
                    </a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('user_update') }}">Profile</a></li>
                                <li><a href="{{ route('user_view_weight') }}">Record today</a></li>
                                <li><a href="{{ route('user_bmi') }}">Body Mass Index</a></li>
                                <li><a href="{{ route('user_bfp') }}">Body Fat Percentage</a></li>
                                 <li><a href="{{ route('user_weight_trendline') }}">Trendline</a></li>
                                <li><div class="dropdown-divider"></div></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        @yield('content')
       <footer class="footer">
             <div class='links flex-center footer-copyright'>© {{ date('Y') }}  
                <a href="{{ url('/contact_us') }}">CONTACT US</a>  
                     All Rights Reserved.
             </div>
         </footer>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>


<!-- Bootstrap datepicker -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


</body>
</html>
