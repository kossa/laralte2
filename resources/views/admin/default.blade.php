<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  @if (env('APP_DEBUG', true))
    <link rel="stylesheet" href="{{ elixir('assets/css/admin.css', '/') }}">  
  @else
    <link rel="stylesheet" href="/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/plugins/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/plugins/datetimepicker/build/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/plugins/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/plugins/chosen/chosen.css">
    <link rel="stylesheet" href="/plugins/datatables/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/AdminLTE/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/plugins/iCheck/skins/square/blue.css">
    <link rel="stylesheet" href="/plugins/AdminLTE/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="/plugins/admin/custom.css">
  @endif

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  @yield('add-css')

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>L</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="{{ asset('/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                <!-- hidden-xs hides the name on small devices so only the image appears. -->
                <span class="hidden-xs">{{ Auth::user()->name }}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="{{ asset('/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                  
                  <p>
                    {{ Auth::user()->name }} - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="{{ route(ADMIN . '.users.edit', Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    {!! Form::open(['url'=>'logout']) !!}
                      <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                    {!! Form::close() !!}
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        @include('admin._partials.menu')
        
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          @yield('page-header', 'kossa')
        </h1>
        
      </section>

      <!-- Main content -->
      <section class="content">

        @include('admin._partials.flash-message')

        @yield('content')

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('admin._partials.footer')

    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  @if (env('APP_DEBUG', true))
    <script src="{{ elixir('assets/js/admin.js', '/') }}"></script>
  @else
    <script src="/plugins/jquery/dist/jquery.min.js"></script>
    <script src="/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/plugins/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
    <script src="/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
    <script src="/plugins/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="/plugins/chosen/chosen.jquery.js"></script>
    <script src="/plugins/iCheck/icheck.min.js"></script>
    <script src="/plugins/AdminLTE/dist/js/app.min.js"></script>
    <script src="/plugins/admin/custom.js"></script>
  @endif

  @yield('add-js')

</body>
</html>
