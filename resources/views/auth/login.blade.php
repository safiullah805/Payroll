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
        <!-- Login form -->
        <form class="login-form" method="post">
          @if ($errors->any())
            <div class="alert alert-danger alert-styled-right alert-dismissible">
              <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
              <span class="font-weight-semibold">{{ $errors->first('email') }}</span>.
            </div>
          @endif
          @csrf
          <div class="card mb-0">
            <div class="card-body">
              <div class="text-center mb-3">
                <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                <h5 class="mb-0">Login to your account</h5>
                <span class="d-block text-muted">Enter your credentials below</span>
              </div>

              <div class="form-group form-group-feedback form-group-feedback-left">
                <input type="text" class="form-control" placeholder="Email" name="email">
                <div class="form-control-feedback">
                  <i class="icon-user text-muted"></i>
                </div>
              </div>

              <div class="form-group form-group-feedback form-group-feedback-left">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="form-control-feedback">
                  <i class="icon-lock2 text-muted"></i>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                  Sign in <i class="icon-circle-right2 ml-2"></i>
                </button>
              </div>

              <div class="text-center">
                @if (Route::has('password.request'))
                  <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                  </a>
                @endif
              </div>
            </div>
          </div>
        </form>
        <!-- /login form -->
      </div>
      <!-- /content area -->
    </div>
    <!-- /main content -->
  </div>
  <!-- /page content -->

</body>
</html>
@include('layout.footer')