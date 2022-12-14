<?php
  session_start();
  error_reporting(0);
  include('includes/dbconn.php');

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


  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include 'includes/header.php'?>
  
    <?php $page='checkout_visitors'; include 'includes/sidebar.php'?>


  <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Check Out Tenants
  
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tenant</li>
      </ol>
    </section>

    <section class="content">
     
    <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Displaying Tenant's Entry</h3>
            </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Tenant's Name</th>
                  <th>Contact</th>
                  <th>Gender</th>
                  <th>Building</th>
                  <th>Apartment</th>
                
                  <th>Entry Time</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php
                $ret=mysqli_query($con,"SELECT * from tblvisitor where remark IS NULL AND outtime IS NULL");
                $cnt=1;
                while ($row=mysqli_fetch_array($ret)) {

                ?>
                <tbody>
                <tr>
                  <td><?php echo $cnt;?></td>

                  <td><?php  echo $row['VisitorName'];?></td>
            
                  <td><?php  echo $row['MobileNumber'];?></td>

                  <td><?php  echo $row['Gender'];?></td>

                  <td><?php  echo $row['BuildingNo'];?></td>

                  <td><?php  echo $row['Apartment'];?></td>

                  

                  <td><?php  echo $row['EnterDate'];?></td>

                  <td><a href="action-visitor.php?editid=<?php echo $row['ID'];?>" title="View Full Details"><i class="fa fa-sign-out" style="color:green;"></i> Update</a></td>
                
                </tr>
                <?php 
                $cnt=$cnt+1;
                }?>
            
               
            
                </tbody>
              
              </table>
            </div>

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

  <div class="control-sidebar-bg"></div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>

<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


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

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>

<?php } ?>
