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
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body id="dashboard">
        <!-- TOP NAVIGATION -->
        <div class="navbar navbar-primary navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<li><a class="navbar-brand" target="_blank" href="{{ URL::to('/') }}">GolfPOD</a></li>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
							<ul id="g-account-menu" class="dropdown-menu" role="menu">
								<li><a href="#">My Profile</a></li>
							</ul>
						</li>
						<li><a href="{{ URL::to('logout') }}"><span class="glyphicon glyphicon-lock"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
        <!-- END TOP NAVIGATION -->
        
        <!-- LEFT NAVIGATION -->
        <div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li{{ (Request::is('admin') ? ' class="active"' : '') }}>
                            {{ link_to_route('dashboard', 'Dashboard') }}
                        </li>
                        <li{{ (Request::is('admin/pods') ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('admin/pods') }}">PODs</a>
                        </li>
						<li{{ (Request::is('admin/games') ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('admin/games') }}">Games</a>
                        </li>
						<li{{ (Request::is('admin/posts') ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('admin/posts') }}">Posts</a>
                        </li>
                        <li{{ (Request::is('admin/users') ? ' class="active"' : '') }}>
                            <a href="{{ URL::to('admin/users') }}">Users</a>
                        </li>
					</ul>
				</div><!-- /.sidebar -->
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
					<h1>@yield('page_header')</h1>
				</div>
			</div>
		</div>
        <!-- END LEFT NAVIGATION -->

        <!-- MAIN CONTENT -->
        <div class='col-md-10 col-md-offset-2'>
            @yield('content')
        </div>
        <!-- END MAIN CONTENT -->
        
        <!-- SCRIPTS -->
        <script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/golfpui.js') }}"></script>
        @yield('scripts')
        <!-- END SCRIPTS -->
    </body>
</html>
