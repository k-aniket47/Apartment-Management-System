<?php
  session_start();
  error_reporting(0);
  include('includes/dbconn.php');

  if (strlen($_SESSION['avmsaid']==0)) {
    header('location:logout.php');
    } else {

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'includes/dbcon.php';


$qry="DELETE from apartment where id=$id";
$result=mysqli_query($con,$qry);

if($result){
    echo"DELETED";
    header('Location:manage-apartment.php');
}else{
    echo"ERROR!!";
}
}
    }
?>