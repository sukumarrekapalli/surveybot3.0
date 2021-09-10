<?php
include 'config.php';
if(isset($_POST['projectid'])){
    $projectid= $_POST['projectid'];
  }

  
$query= "select * from survey_table where Project_id = ".$projectid.";";
$result=mysqli_query($dbconnect,$query);

$query2= "select question_list from projects_table where id = ".$projectid.";";
$result2=mysqli_query($dbconnect,$query2);

$query3= "select * from response_table where Project_id = ".$projectid.";";
$result3=mysqli_query($dbconnect,$query3);

$questionlist= mysqli_fetch_row($result2);




$questions_arr = explode(',',$questionlist[0]);

echo "Total no of questions<b>".sizeof($questions_arr)."</b><br><br>";

$num_rows = mysqli_num_rows($result);

$num_responses = mysqli_num_rows($result3);

// while($row = mysqli_fetch_array($result))
// {
//   echo $row['Employee_name']." with code:". $row['Survey_link']."<br>";
// }

echo "Total No of participants:<b>".$num_rows."</b><br><br>";
echo "Total No of Responses:<b>".$num_responses."</b><br><br>";

echo "<b>Responses so far :</b><br><br>";
while($row3 = mysqli_fetch_array($result3))
{

  $query4= "select question_text from questions_table where Id = ".$row3['Questions'].";";
   $result4 = mysqli_query($dbconnect,$query4);
   $questiontext = mysqli_fetch_row($result4);
  
  echo "<b>".$row3['Answers']."</b> by <b> ".$row3['Survey_link']."</b> for question<b> ".$questiontext[0]."</b><br>";


}

  ?>