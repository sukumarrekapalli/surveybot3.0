<?php
include 'config.php';
 if(isset($_POST['projectname'])){
    $projectname= $_POST['projectname'];
  }

  if(isset($_POST['orgname'])){
    $orgname= $_POST['orgname'];
  }
  if(isset($_POST['username'])){
    $username= $_POST['username'];
  }

  if(isset($_POST['fromdate'])){
     $fromdate = $_POST['fromdate'];
  }

  if(isset($_POST['todate'])){
    $todate = $_POST['todate'];
  }





$query= "insert into projects_table (Project_name, Organisation_name, creator, fromdate, todate) values ('$projectname','$orgname','$username','$fromdate','$todate')";
$query1="select last_insert_id();";
$result=mysqli_query($dbconnect,$query);
$result1=mysqli_query($dbconnect,$query1);

$ques= $result1->fetch_array();
$ques_id = $ques[0];
echo $ques_id;




?>