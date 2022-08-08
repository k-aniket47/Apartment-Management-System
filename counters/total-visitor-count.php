<?php
include './includes/dbconn.php';

$query=mysqli_query($con,"SELECT ID from tblvisitor");
$count_total_visitors=mysqli_num_rows($query);

echo $count_total_visitors
 ?> 