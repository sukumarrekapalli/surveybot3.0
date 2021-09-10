<?php
include 'config.php';

function filtercode($responses){
  $array = str_split($responses);
  $i=0;
  foreach($array as $char){
  
   echo $char.'<br>';
    if($char=="'"){
        $array[$i]="\'";
     
    }
    $i++;
  }

  $final = implode("",$array);
  return $final;

}

if(isset($_POST['textquestion'])){
    $textquestion= filtercode($_POST['textquestion']);
  }

  if(isset($_POST['projectid'])){
    $projectid= $_POST['projectid'];
  }

  
$query= "insert into questions_table (question_text) values ('$textquestion');";
$query1="select last_insert_id();";
$result=mysqli_query($dbconnect,$query);
$result1=mysqli_query($dbconnect,$query1);

$ques= $result1->fetch_array();
$ques_id = $ques[0];

  $question='"'.$textquestion.'"';
  $type='"'."text".'"';
  $name='"'.$ques_id.'"';
  
    $questioncode = "<input type=".$type."name=".$name." cf-questions=".$question.">";
  
    $query2= "UPDATE questions_table SET Questions ='".$questioncode."' WHERE id = $ques_id;";
    $query3= "UPDATE questions_table SET project_id ='".$projectid."' WHERE id = $ques_id;";
   
$result2=mysqli_query($dbconnect,$query2);
$result3=mysqli_query($dbconnect,$query3);


//question type
$query4= "UPDATE questions_table SET question_type ='open space' WHERE id = $ques_id;";
$result4=mysqli_query($dbconnect,$query4);


// $type="text";
// $name="array[]";
//   $questioncode = "<input type=".$type."name=".$name." cf-questions='".$textquestion."'>";

//   $query2= "UPDATE questions_table SET Questions ='".$questioncode."' WHERE id = $ques_id;";

// $result2=mysqli_query($dbconnect,$query2);

echo $ques_id;

  ?>
