<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nav Bar Only - MISOL</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/global_assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/colors.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>

  <!-- Main navbar -->
  <div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
      <a href="#" class="d-inline-block text-white" style="font-size: 15px; font-weight: bold;">
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
      
      <!-- Removed logged-in profile elements -->
    </div>
  </div>
  <!-- /main navbar -->

  <!-- Core JS files -->
  <script src="{{ asset('assets/global_assets/js/main/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/global_assets/js/main/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/global_assets/js/plugins/loaders/blockui.min.js') }}"></script>

  <!-- Theme JS files -->
  <script src="{{ asset('assets/js/app.js') }}"></script>
  <script src="{{ asset('assets/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
  <script src="{{ asset('assets/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
</body>
</html>
