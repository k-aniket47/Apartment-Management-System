<?php
include './includes/dbconn.php';

$query=mysqli_query($con,"SELECT ID from apartment");
$count_apartment=mysqli_num_rows($query);

echo $count_apartment;
 ?> 