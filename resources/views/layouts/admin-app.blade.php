<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/plugins/pickers/daterangepicker.js') }}"></script>

	<script type="text/javascript" src="{{ asset('backendcss/assets/js/core/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('backendcss/assets/js/pages/dashboard.js') }}"></script>
	<!-- /theme JS files -->

</head>
<body>
<!-- Main navbar -->
<div class="navbar navbar-inverse">
    @component('components.admin-topheader')
	@endcomponent 	
</div>
<!-- /main navbar -->

<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
        <div class="page-content">
            
           <!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">
            	    @component('components.admin-menu')
	                @endcomponent	
            	</div>
			</div>
            <!-- /main sidebar -->

            <!-- Main content -->
			<div class="content-wrapper">
                <!-- Page header -->
				<div class="page-header page-header-default">
                    @component('components.admin-pageheader')
	                @endcomponent
				</div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    @yield('content')
                    <!-- Footer -->
					<div class="footer text-muted">
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