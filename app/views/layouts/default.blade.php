<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="Matt Davis">
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="{{ asset('js/html5shiv.js') }}"></script>
          <script src="{{ asset('js/respond.js') }}"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css" media="all">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <!-- HEADER -->
        <div class="page-header visible-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h1><a href="{{ URL::to('/') }}" title="GolfPOD"><img src="{{ asset('img/golfpod-logo-150.png') }}" alt="GolfPOD" class="img-responsive"/></a></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER -->


        <!-- NAVBAR -->
        @include('layouts.partials.nav')
        <!-- END NAVBAR -->
        
        <!-- MAIN CONTENT -->
        <div>@yield('content')</div>
        <!-- END MAIN CONTENT -->
        
        
        <!-- FOOTER -->
        <div class="clearfix footer">
            <div class="container">
                <div id="footer-content" class="row">
                    <div class="col-lg-4">
                        <h2><a href="{{ URL::to('/') }}" title="Homepage">GolfPOD</a></h2>
                        <h3><a href="{{ URL::to('about') }}" title="Learn about GolfPOD">About Us</a></h3>
                    </div>
                    <div class="col-lg-4">
                        <h3><a href="{{ URL::to('practice-of-the-day') }}">Practice of the day</a></h3>
                        <h3><a href="{{ URL::to('games') }}">Games</a></h3>
                        <ul>
                            <li><a href="{{ URL::to('games/putting') }}">Putting</a></li>
                            <li><a href="{{ URL::to('games/chip-pitch-sand') }}">Chipping/Pitching/Bunker</a></li>
                            <li><a href="{{ URL::to('games/driving-range') }}">Driving Range</a></li>
                            <li><a href="{{ URL::to('games/on-course') }}">On Course</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h3><a href="#">Follow Us!</a></h3>
                        <a class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
                        <a class="btn-social btn-google-plus"><i class="fa fa-google-plus"></i></a>
                        <a class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="container">
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2014 GolfPOD &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </div>
        </div>
        <!-- END FOOTER -->

        <!-- SCRIPTS -->
        <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/golfpui.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
        <!-- END SCRIPTS -->
    </body>
</html>
