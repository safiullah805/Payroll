
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Payroll - MISOL</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/global_assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
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
	<!-- /theme JS files -->

</head>

<body>

  <!-- Include header -->
  @include('layout.auth_layout.auth_header')
  
	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Password recovery form -->
				<form class="login-form" method="POST" action="{{ route('password.email') }}">
                    @csrf
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Password recovery</h5>
								<span class="d-block text-muted"> {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }} </span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-right">
								<input type="email" class="form-control" placeholder="Your email" name="email"">
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
								</div>
							</div>

							<button type="submit" class="btn bg-blue btn-block"><i class="icon-spinner11 mr-2"></i> {{ __('Email Password Reset Link') }} </button>
						</div>
					</div>
				</form>
				<!-- /password recovery form -->

			</div>
			<!-- /content area -->


			@include('layout.footer')

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
