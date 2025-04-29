
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Payroll - MISOL</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/global_assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/global_assets/css/icons/fontawesome/styles.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{ asset('assets/global_assets/js/main/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/js/sweet_alert.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script src="{{ asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/demo_pages/form_layouts.js') }}"></script>
    <script src="{{ asset('assets/global_assets/js/demo_pages/form_select2.js') }}"></script>
	<script src="{{ asset('assets/global_assets/js/plugins/notifications/sweet_alert.min.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			 <a href="../full/index.html" class="d-inline-block text-white" style="font-size: 15px; font-weight: bold;">
            Medical Surgical Associates
        </a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset('assets/global_assets/images/image.png') }}" class="rounded-circle" alt="">
						<span>{{ Auth::user()->name }}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
							<a href="route('logout')" class="dropdown-item"onclick="event.preventDefault();
                                                this.closest('form').submit();">
								<i class="icon-switch2"></i> 
								{{ __('Log Out') }}
							</a>
                        </form>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="{{ asset('assets/global_assets/images/image.png') }}" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">{{ Auth::user()->name }}</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
				<ul class="nav nav-sidebar" data-nav-type="accordion">
    <!-- Dashboard -->
    <li class="nav-item mb-3">
        <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
            <i class="icon-home4"></i>&nbsp;&nbsp;
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Employees -->
    <li class="nav-item nav-item-submenu mb-3">
        <a href="#" class="nav-link d-flex align-items-center">
            <i class="icon-users"></i>&nbsp;&nbsp;
            <span>Employees</span>
        </a>
        <ul class="nav nav-group-sub">	
            <li class="nav-item">
                <a href="{{ route('employee.add') }}" class="nav-link">Add New Employee</a>
            </li>
			<li class="nav-item">
                <a href="{{ route('employees.listing') }}" class="nav-link">Employee Listing</a>
            </li>
        </ul>
    </li>

    <!-- Payroll -->
    <li class="nav-item nav-item-submenu mb-3">
        <a href="#" class="nav-link d-flex align-items-center">
            <i class="icon-cash"></i>&nbsp;&nbsp;
            <span>Payroll</span>
        </a>
        <ul class="nav nav-group-sub">
            <li class="nav-item">
                <a href="{{ route('calculate_payroll') }}" class="nav-link">Calculate Payroll</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('salary_output') }}" class="nav-link">Salary Output</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('employer_output') }}" class="nav-link">Employer Output</a>
            </li>
        </ul>
    </li>

    <!-- Settings -->
    <li class="nav-item nav-item-submenu mb-3">
        <a href="#" class="nav-link d-flex align-items-center">
            <i class="icon-cog"></i>&nbsp;&nbsp;
            <span>Settings</span>
        </a>
        <ul class="nav nav-group-sub">
            <li class="nav-item">
                <a href="{{ route('employee_deduction_settings') }}" class="nav-link">Employee Deduction Settings</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('employer_contribution_settings') }}" class="nav-link">Employer Deduction Settings</a>
            </li>
        </ul>
    </li>
</ul>


						<!-- /main -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">


			


			
