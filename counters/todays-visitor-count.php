<?php
include './includes/dbconn.php';

$query=mysqli_query($con,"SELECT ID from tblvisitor where date(EnterDate)=CURDATE();");
$count_today_visitors=mysqli_num_rows($query);

echo $count_today_visitors;
 ?> 