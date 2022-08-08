<?php
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');

    if(isset($_POST['forgotpw']))
    {
        $secode=$_POST['secode'];
        $email=$_POST['email'];

        $query=mysqli_query($con,"SELECT ID from tbladmin where  Security_Code='$secode' && Email='$email' ");
        $ret=mysqli_fetch_array($query);

        if($ret>0){
            $_SESSION['secode']=$secode;
            $_SESSION['email']=$email;
            header('location:password-recovery.php');
        } else {
            $msg="Invalid Details, Please Try Again!";}
    }
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Apartment Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Apartment Visitor</b> Management System</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Password Recovery - STEP 1/2</p>

    <form method="POST">

    <?php if($msg){ echo "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-info-circle'></i> Alert!</h4>
                $msg
    </div>";}  ?>

        <div class="form-group has-feedback">
            <input type="number" class="form-control" name="secode" placeholder="Security Code">
            <span class="glyphicon glyphicon-eye-close form-control-feedback"></span>
        </div>

      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Valid Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="forgotpw" class="btn btn-primary btn-block btn-flat">Proceed</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   

    <a href="index.php">Go Back</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
