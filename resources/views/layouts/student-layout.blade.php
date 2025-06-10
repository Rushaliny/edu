<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://eduadmin-template.multipurposethemes.com/bs5/images/favicon.ico">

    <title>EduStudent - Dashboard</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/vendors_css.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css') }}">
    <!-- fontawesome  -->
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css') }}" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
	<!-- Style-->
	<link rel="stylesheet" href="{{ asset('admin_assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('admin_assets/css/skin_color.css') }}">
    @stack('css')
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
    <x-theme-alert/>

<div class="wrapper">
	<div id="loader"></div>

    <x-student-header/>


  <!-- sidebar-->
  <x-student-site-bar/>
  <!-- /sidebar-->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
        @yield('main-content')
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

  <x-student-footer/>

  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->




    {{-- <x-admin-chat/> --}}


	<!-- Page Content overlay -->
    @yield('models')

    <script src="{{ url('https://unpkg.com/feather-icons') }}"></script>
    <script src="{{ asset('admin_assets/js/vendors.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/icons/feather-icons/feather.min.js') }}"></script>
	<!-- EduAdmin App -->
	<script src="{{ asset('admin_assets/js/template.js') }}"></script>

    @stack('script')


</body>

</html>
