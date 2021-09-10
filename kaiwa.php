<html>

<head>
  <meta charset="UTF-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->


  <style>
    @media (max-width:556px) {
      content {
        margin-top: 30%;
      }

      h2 {
        font-size: 20px;
        top: 30%;
      }


      p {
        font-size: 12px;
      }
    }

    .center {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>


</head>

<?php
include 'config.php';

function filtercode($responses){
  $array = str_split($responses);
  $i=0;
  foreach($array as $char){
  
  // echo $char.'<br>';
    if($char=="'"){
        $array[$i]="\'";
     
    }
    $i++;
  }

  $final = implode("",$array);
  return $final;

}
    $question='';
    $surveycode='';
    $project_id='';
    // if(isset($_POST['question_list'])){
    //   $question= $_POST['question_list'];
    // }
    if(isset($_POST['project_id'])){
      $project_id = $_POST['project_id'];
    }
        if(isset($_POST['survey1'])){
      $surveycode = $_POST['survey1'];
    }
    
   $l = count($_POST);
  

   
    if($_POST) {

      foreach($_POST as $key => $val) {

        if (--$l < 2) {
        break;
    }

    if(is_array($val)){
      $val= implode(",",$val);
    }

    $val = filtercode($val);
    $val = mysqli_real_escape_string($dbconnect, $val);
         $sql="INSERT INTO response_table(Survey_link, Questions, Answers, Project_id) VALUES ('$surveycode','$key','$val','$project_id')";
 $run=mysqli_query($dbconnect,$sql);
    }
    }  
    

 
 if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
} 

 ?>

<body style="overflow:hidden;">

  <!--<img src="./Presentation1.jpg" alt="thankyou" height="auto" width="80%"  max-width="80%">-->
  <div class="center">
    <img src="./assets/images/done.gif" height="250px" />
    <h2 style="color:#339fd9; text-align:center; font-size:20px;"> Thank you!<br>

  </div>


</body>

</html>

<!--

if($_POST['test'] != '' || isset($_POST['test'])) {

foreach($_POST as $key => $val) {

echo 'Field name : '.$key .', Value : '.$val.'<br>';
$data[$key] = $val; //Thsi array holds all post data now.

}

}
?>