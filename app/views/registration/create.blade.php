<!DOCTYPE html>
<html lang="en" id="login-page">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="Matt Davis">
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

        <title>Registration | GolfPOD</title>

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
	<body ng-app='login'>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display-->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('/') }}" target="_blank">GolfPOD</a>
                </div>
            </div>
        <div class="dropdown"></div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default" ng-controller='LoginController as lc'>
						<div class="panel-heading">
							<div class="panel-title">
								<h1><a title="GolfPOD" href="{{ URL::to('/') }}">GolfPOD</a></h1>
							</div>
						</div>
                        <div class="panel-body">
                            <h2 class="text-success">Registration</h2>
                            {{ Form::open(['route' => 'postRegister', 'name' => 'registrationForm']) }}
                                <!-- USERNAME -->
                                <div class="control-group">
                                    {{ Form::label('username', 'Username', [ 'class' => 'control-label' ]) }}
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon glyphicon glyphicon-user"></span>
                                        {{ Form::text('username', null, ['class'=>'form-control', 'placeholder' => 'Username', 'required' => 'required', 'ng-model' => 'username'])}}
                                    </div>
                                </div
                                
                                <!-- EMAIL -->
                                <div class="control-group">
                                    {{ Form::label('email', 'Email', [ 'class' => 'control-label' ]) }}
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon glyphicon glyphicon-envelope"></span>
                                        {{ Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'Email', 'required' => 'required', 'ng-model' => 'email'])}}
                                    </div>
                                </div>
                                
                                <!-- PASSWORD -->
                                <div class="control-group">
                                    {{ Form::label('password', 'Password', [ 'class' => 'control-label' ]) }}
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon glyphicon glyphicon-lock"></span>
                                        {{ Form::password('password', ['class'=>'form-control', 'placeholder' => 'Password', 'required' => 'required', 'ng-model' => 'password'])}}
                                    </div>
                                </div>
                                
                                <!-- PASSWORD_CONFIRMATION -->
                                <div class="control-group">
                                    {{ Form::label('password_confirmation', 'Confirm Password', [ 'class' => 'control-label' ]) }}
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon glyphicon glyphicon-lock"></span>
                                        {{ Form::password('password_confirmation', ['class'=>'form-control', 'placeholder' => 'Confirm Password', 'required' => 'required', 'ng-model' => 'password_confirmation'])}}
                                    </div>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-lg btn-block btn-login">Create Account</button>
                                </div>
                            {{ Form::close() }}
                        </div>
                        <div class='panel-footer'>
                            <div class="form-group">
                                <p>Already have an account? Sign in here.</p>
                                <a href="{{ URL::to('login') }}" class="btn btn-default btn-lg btn-block btn-login">Login to your account.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SCRIPTS -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.js"></script>
        <script src='{{ asset('js/login/login.js') }}'></script>
        <!-- END SCRIPTS -->
    </body>
</html>
