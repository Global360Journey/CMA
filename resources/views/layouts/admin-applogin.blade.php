<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'ChaurasiaMarry.com') }}</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('backendcss/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backendcss/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backendcss/assets/css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backendcss/assets/css/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('backendcss/assets/css/colors.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->


	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/core/app.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="#" style="font-size:22px;">ChaurasiaMarry.com</a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="{{ route('/') }}">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
    <!-- /main navbar -->
    
    <!-- Page container -->
	 <div class="page-container">
        
        <!-- Page content -->
		<div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">
              
                <!-- Content area -->
				<div class="content">
                    @yield('content')

                    <!-- Footer -->
					<div class="footer text-muted text-center">
						&copy; 2019. <a href="#">ChaurasiaMarry.com</a> by <a href="http://global360journey.com/" target="_blank">Global360 Journey</a>
					</div>
                    <!-- /footer -->
                
                </div>
				<!-- /content area -->    
            
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

     </div>
	<!-- /page container -->

</body>
</html>    