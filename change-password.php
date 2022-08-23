<?php
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');

    if (strlen($_SESSION['avmsaid']==0)) {
        header('location:logout.php');
    } else {
    if(isset($_POST['update'])){

    $adminid=$_SESSION['avmsaid'];
    $cpassword=md5($_POST['currentpassword']);
    $newpassword=md5($_POST['newpassword']);
    $query=mysqli_query($con,"select ID from tbladmin where ID='$adminid' and   Password='$cpassword'");
    $row=mysqli_fetch_array($query);
    if($row>0){
        $ret=mysqli_query($con,"UPDATE tbladmin set Password='$newpassword' where ID='$adminid'");
        $msg= "Your password has been changed"; 
    } else {
        $msg="Current password is wrong";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Apartment Management System</title>
 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <script type="text/javascript">
    function checkpass(){
    if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value){
        alert('New Password and Confirm Password does not match!');
        document.changepassword.confirmpassword.focus();
        return false;
        } return true;
    }   
    </script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include 'includes/header.php'?>
  
    <?php include 'includes/sidebar.php'?>

  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Change Password

      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Password Section</li>
      </ol>
    </section>


    <section class="content">

      
      <?php if($msg){ echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-info-circle'></i> Alert!</h4>
                $msg
                </div>";}  ?>


                    <?php
            $adminid=$_SESSION['avmsaid'];
            $ret=mysqli_query($con,"SELECT * from tbladmin where ID='$adminid'");
            while ($row=mysqli_fetch_array($ret)) {
            ?>
      
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Please update your details below</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>


            <div class="box-body">
              <div class="row">
                <form method="POST" class="">
                
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Account Registered At</label>
                    <input type="text" class="form-control" value="<?php  echo $row['AdminRegdate'];?>" readonly>
                  </div>

                </div>
                <!-- /.col -->
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Existing Password</label>
                        <input type="password" class="form-control" id="currentpassword" name="currentpassword" value="" required>
                    </div>

                </div>

                <div class="col-md-3">
                
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" id="newpassword" name="newpassword" value="" required>
                    </div>

                </div>


                <div class="col-md-3">
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="" required>
                </div>
                
                </div>
 <?php }?>
              </div>

              

            </div>

            <div class="box-footer">
            <button type="submit" class="btn btn-block btn-danger btn-lg" name="update">Make Changes</button>
            </div>
          </div>
          </form>


    </section>

  </div>

  
  <?php include 'includes/footer.php'?>


  <aside class="control-sidebar control-sidebar-dark" style="display: none;">

    <div class="tab-content">


      <div class="tab-pane" id="control-sidebar-home-tab">
       
      </div>
 
    </div>
  </aside>


  <div class="control-sidebar-bg"></div>
</div>



<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>

<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="bower_components/fastclick/lib/fastclick.js"></script>

<script src="dist/js/adminlte.min.js"></script>

<script src="dist/js/pages/dashboard.js"></script>

<script src="dist/js/demo.js"></script>
</body>
</html>

<?php } ?>
