<?php  
include 'config.php';
$query = "select * from questions_table ORDER BY id DESC";

$result=mysqli_query($dbconnect,$query);

$row = mysqli_fetch_assoc($result);

echo $row