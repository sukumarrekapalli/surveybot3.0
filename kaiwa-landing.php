<!DOCTYPE html>
<html>
<head>
    
	<title>Culturelytics</title>
	<style>

div {

    text-align: center;
	width: 80%;
	height: 200px;
	
	
	position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
  	
	margin: auto;
}


</style>
<link rel="shortcut icon" type="image/ico" href="./kaiwa.ico"/>
</head>




<body style="overflow-y: hidden" >

<?php
include 'config.php';
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
else
    $link = "http"; 
  
// Here append the common URL characters. 
$link .= "://"; 
  
// Append the host(domain name, ip) to the URL. 
$link .= $_SERVER['HTTP_HOST']; 
 $ab = $link;
// Append the requested resource location to the URL 
$link .= $_SERVER['REQUEST_URI'];
 
$a = $_SERVER['REQUEST_URI'];


$survey = explode("/",$link);
    $surveycode = end($survey);
    
    $abc="select * from survey_table where survey_link = '".$surveycode."' limit 1";

$result = mysqli_query($dbconnect,$abc);



$num=mysqli_num_rows($result);
if($num==1){

	$check="select * from response_table where Survey_link = '".$surveycode."' limit 1";
	$surveycheck = mysqli_query($dbconnect,$check);
	$surveycomplete=mysqli_num_rows($surveycheck);

	

if($surveycomplete){
	?>

 <div> 
 <img src="./kaiwa.png"/>
 <h1> survey already completed</h1></div>
	<?php
}


else{
	
	$query ="select Project_id from survey_table where Survey_link = '".$surveycode."'";


	$project_query = mysqli_query($dbconnect,$query);
	
	$row = $project_query->fetch_array();
	$project_id= $row[0];
	
	
    $datequery = "select todate from projects_table where id=".$project_id.";";
	$dateresult = mysqli_query($dbconnect,$datequery);
    $date = $dateresult->fetch_array();

    // echo $date[0];
	// echo date('Y-m-d');

	 if (date('Y-m-d') >  $date[0]){
		 echo '<h4>Survey expired, please contact your administrator.</h4>';
	 }
	 else{
		

		 
	$query2 ="select Organisation_name from projects_table where id = '".$project_id."'";
	$org_query = mysqli_query($dbconnect,$query2);
	$row2 = $org_query->fetch_array();
	$Org_name = $row2[0];
	
	$query3 = "select Employee_name from survey_table where Survey_link = '".$surveycode."'";
	$employee_query = mysqli_query($dbconnect,$query3);
	$row3 = $employee_query->fetch_array();
	$emp_name = $row3[0];
	?>
	
	<div style="content-align: center;">
	<h1>Hi  <?php echo $emp_name; ?>!</h1>
	<h3>Your project ID is <?php echo $project_id; ?> </h3>
	<h3>Your Organisation name:  <?php echo $Org_name; ?> </h3>
	<form method="post" action="../kaiwa_chat.php">
	<input type="text" name="survey" value="<?php echo $surveycode;?>" style="display:none">
	<input name="project_id" value="<?php echo $project_id;?>" style="display:none;">
	<button style="background-color: #3279a8; color: white; padding:10px; margin: 10px;" type="submit">
			Take Survey</button>
	</form>
	</div>
	<?php
	 }

	
}

  

}
else{
    echo "invalid code";
}
?>

</body>
</html>