<?php
 include 'config.php';
 if(isset($_POST['projectid'])){
    $projectid= $_POST['projectid'];
  }

  
    
  

  if(isset($_POST['questionsselected'])){
    $questions= $_POST['questionsselected'];
   
  }

  $questionslist= implode(',',$questions);
  
  
echo $projectid;

$query= "UPDATE projects_table SET question_list = '".$questionslist."' WHERE id = $projectid;";

$result=mysqli_query($dbconnect,$query);














?>