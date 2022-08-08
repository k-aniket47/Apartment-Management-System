<?php
include './includes/dbconn.php';

$query=mysqli_query($con,"SELECT * from tblvisitor where remark IS NULL AND outtime IS NULL");
$count_today_visitors=mysqli_num_rows($query);

echo $count_today_visitors;
 ?> 