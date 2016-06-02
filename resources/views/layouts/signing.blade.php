<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LaraLTE 2</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
  <link rel="stylesheet" href="{{ elixir('assets/css/admin.css', '/') }}">  
  <link rel="stylesheet" href="{{ asset('/plugins/admin/custom.css') }}">  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Lara</b>LTE2</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    @yield('content')

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

  <script src="{{ elixir('assets/js/admin.js', '/') }}"></script>
  <script src="{{ asset('/plugins/admin/custom.js') }}"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
