<?php
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');
    error_reporting(0);
    if (strlen($_SESSION['avmsaid']==0)) {
        header('location:logout.php');
    } else { 
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

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include 'includes/header.php'?>
  
    <?php $page='dashboard'; include 'includes/sidebar.php'?>


  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Dashboard
     
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>


    <section class="content">

      <div class="row">
        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-primary">
            <div class="inner">
              <h3><?php include 'counters/total-visitor-count.php'?></h3>

              <p>Total Tenants</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
            <a href="visitor-mgmt.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php include 'counters/todays-visitor-count.php'?></h3>

              <p>Today's Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-contacts"></i>
            </div>
            <a href="visitor-mgmt.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php include 'counters/occ-apartment.php'?></h3>

              <p>Occupied Apartments</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="manage-apartment.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">

          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php include 'counters/av-apartment.php'?></h3>

              <p>Total Apartments</p>
            </div>
            <div class="icon">
              <i class="ion ion-home"></i>
            </div>
            <a href="manage-apartment.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>



    </section>

  </div>

  
  <?php include 'includes/footer.php'?>


  <aside class="control-sidebar control-sidebar-dark" style="display: none;">


    <div class="tab-content">


      <div class="tab-pane" id="control-sidebar-home-tab">
       
      </div>
 
    </div>
  </aside>
  <!-- /.control-sidebar -->

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
