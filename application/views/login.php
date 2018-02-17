<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Help-IT | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <!--Admin LTE -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.css">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bower_components/select2/dist/css/select2.min.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Help</b>-IT
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan login untuk memulai</p>

    <form action="<?php echo base_url('login/proses'); ?>" method="post">
      <?php if (validation_errors() || $this->session->flashdata('result_login')) { ?>
            <div class="alert alert-danger animated fadeInDown" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Peringatan!</strong><br>
                <?php echo validation_errors(); ?>
                <?php echo $this->session->flashdata('result_login'); ?>
            </div>
            <script>
              window.setTimeout(function() {$(".alert").fadeTo(500, 0).slideUp(500, function(){$(this).remove();});},800);
            </script>
      <?php } ?>
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username" autofocus="true">
        <span class="fa fa-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="fa fa-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4 pull-right">
          <button type="submit" id="btn_login" class="btn btn-primary pull-right"><i class="fa fa-sign-in"></i> Log In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <br>
  <center><strong>Copyright &copy; 2018 <a href="http://www.zdienos.com">zdienos</a>.</strong> All rights
  reserved.</br><b>Version</b> 1.1.9</center>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>