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
  

$type='"'."radio".'"';
  $name='"'.$ques_id.'"';

$code ="<fieldset cf-questions=".$question."  cf-input-placeholder=".'"Please select one of the above options"'.">";
    

if(isset($_POST['options'])){
    $options= $_POST['options'];

    $l = count($options);

    for($i=0; $i<$l; $i++){

       $value= explode(' ',filtercode($options[$i]));
       $value= implode('', $value);
        
       $code = $code."<input type=".$type." name=".$name." cf-label=".'"'.filtercode($options[$i]).'"'."value=".'"'.$value.'"'."/>";
  
    }
     
  }


  $code = $code."</fieldset>";


  if(isset($_POST['responses'])){
    $responses= $_POST['responses'];

    $l2 = count($responses);
    

    for($j=0; $j<$l2; $j++){

        $value= explode(' ',filtercode($options[$j]));
        $value= implode('', $value);
     
        $code = $code." <cf-robot-message cf-questions=".'"'.filtercode($responses[$j]).'"'." cf-conditional-".$ques_id."=".'"'.$value.'"'."></cf-robot-message>";
     }
      
   }

   
       $query2= "UPDATE  questions_table SET Questions='".$code."' WHERE id = $ques_id;";
      //  $query= "UPDATE projects_table SET question_list = '".$questionslist."' WHERE id = $projectid;";
       $result=mysqli_query($dbconnect,$query2);
       
       $queryid= "UPDATE questions_table SET project_id ='".$projectid."' WHERE id = $ques_id;";

$result3=mysqli_query($dbconnect,$queryid);
    
       // $type="text";
       // $name="array[]";
       //   $questioncode = "<input type=".$type."name=".$name." cf-questions='".$textquestion."'>";
       
       //   $query2= "UPDATE questions_table SET Questions ='".$questioncode."' WHERE id = $ques_id;";
       
       // $result2=mysqli_query($dbconnect,$query2);
       $query4= "UPDATE questions_table SET question_type ='mcq' WHERE id = $ques_id;";
$result4=mysqli_query($dbconnect,$query4);
       
       echo $ques_id;
      

         
         
         
         ?>






          
         
          
         
         
           
           