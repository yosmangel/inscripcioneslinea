<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" href="/font-icons/font-awesome/css/font-awesome.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="/adminlte/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/neon-core.css">
  <link rel="stylesheet" href="/css/neon-theme.css">
  <link rel="stylesheet" href="/css/neon-forms.css">
  <link rel="stylesheet" href="/css/custom.css">

  @stack('styles')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="/js/jquery-1.11.3.min.js"></script>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('header')
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
      
      @if(session()->has('flash'))
          <div class="alert alert-success">{{ session('flash') }}</div>
      @endif
      @yield('content')
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 
  <div class="cargando" ></div>
  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@yield('modales')

  <script>
    //Cerrar un modal y abrir uno nuevo
    var modalUniqueClass = ".modal";
    $('.modal').on('show.bs.modal', function(e) {
      var $element = $(this);
      var $uniques = $(modalUniqueClass + ':visible').not($(this));
      if ($uniques.length) {
        $uniques.modal('hide');
        $uniques.one('hidden.bs.modal', function(e) {
          $element.modal('show');
        });
        return false;
      }
    });
  </script>

<!-- jQuery 3 -->
<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<script src="/js/gsap/TweenMax.min.js"></script>
  <script src="/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
  <script src="/js/joinable.js"></script>
  <script src="/js/resizeable.js"></script>
  <script src="/js/neon-api.js"></script>
  <script src="/js/jquery.bootstrap.wizard.min.js"></script>
  <script src="/js/bootstrap-switch.min.js"></script>

  <!-- JavaScripts initializations and stuff -->
  <script src="/js/neon-custom.js"></script>
  <script src="/js/neon-demo.js"></script>
  @stack('scripts')
</body>
</html>