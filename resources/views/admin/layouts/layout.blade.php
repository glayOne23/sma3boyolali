<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="/gentelella/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
     <!-- iCheck-->
    <link href="/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="/gentelella/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <script src="/gentelella/vendors/dropzone/dist/min/dropzone.min.js"></script>
    <!-- jQuery -->
    <script src="/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Custom Theme Style -->
    <link href="/gentelella/build/css/custom.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="/gentelella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @include('admin.layouts.sidebar')

        @include('admin.layouts.header')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            @yield('content')
          </div>
        </div>
        <!-- /page content -->

        @include('admin.layouts.footer')
        
      </div>
    </div>

    <!-- jQuery -->
    <script src="/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="/gentelella/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- iCheck -->
    <script src="/gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="/gentelella/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="/gentelella/build/js/custom.js"></script>
  </body>
</html>