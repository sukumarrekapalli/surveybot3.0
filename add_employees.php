<?php 
include 'config.php';
if(isset($_POST['projectid'])){
    $projectid= $_POST['projectid'];
  }

  if(isset($_POST['employees'])){
    $employees= $_POST['employees'];
  }

$c= count($employees);

echo "Your project ID: ".$projectid;
for($i=0; $i<$c; $i++){

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
    $n = 7;
    for ($j = 0; $j < $n; $j++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
    echo $employees[$i]."&nbsp;<a href=".'"'."http://localhost:8080/kaiwa-internal/kaiwa-landing.php/".$randomString.'"'." target=".'"'."_blank".'"'.">click here to take survey!</a>";
    echo "<br>";
    
    $query= "insert into survey_table (Project_id, Employee_name, Survey_link) values ('$projectid','$employees[$i]','$randomString')";
    
    $result=mysqli_query($dbconnect,$query);
    

}   

  
