<!-- php
if (!isset($_SESSION)){
  session_start();

if($_SESSION['logged_in']!=1)
{ 

  header("Location: ./");

}
if($_SESSION['logged_in']==1)
{
?> -->
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

    if($char=='"'){
      $array[$i]='\"';
   
  }
    $i++;
  }

  $final = implode("",$array);
  return $final;

}


if (!isset($_SESSION)){
  session_start();
//echo $_SESSION['Username'];
if($_SESSION['logged_in']!=1)
{ 

  header("Location: ./");

}
if($_SESSION['logged_in']==1)
{

}
function destroysession(){
  $_SESSION['logged_in']==0;
			       session_destroy(); 
}

}


if(isset($_SESSION['Username']) && isset($_POST['projectid']))
 { 
  $projectid= $_POST['projectid'];

  $queryownership = "select creator from projects_table where id = ".$projectid.";";

$resultqueryownership = mysqli_query($dbconnect,$queryownership);

$owner = mysqli_fetch_array($resultqueryownership);

if($owner[0]== $_SESSION['Username'] || $_SESSION['Username'] == 'kaiwaadmin' ){













if(isset($_POST['projectid'])){
 

    $projectid= $_POST['projectid'];
   // echo $projectid;
  //  $ownershipquery = "select creator from projects_table where id = ".$projectid.";";
  //  $ownershipresult = mysqli_query($dbconnect, $ownershipquery);
  //  $ownershiptable = mysqli_fetch_array($ownershipresult);

  //  if(isset($_POST['username'])){
  //     $username = $_POST['username'];
  //   //  echo $username;
  // $ownershiptable[0];
  //  }

   
    $query= "select * from survey_table where Project_id = ".$projectid.";";
$result_surveytable=mysqli_query($dbconnect,$query);

$query2= "select question_list from projects_table where id = ".$projectid.";";
$result2=mysqli_query($dbconnect,$query2);

$questionlist =mysqli_fetch_row($result2);
//echo $questionlist[0];

$questions_arr = explode(',',$questionlist[0]);




$query3= "select * from response_table where Project_id = ".$projectid.";";
$result_responsetable=mysqli_query($dbconnect,$query3);


//variables
$no_of_questions = sizeof($questions_arr);
//echo $no_of_questions;
$no_of_participants = mysqli_num_rows($result_surveytable);
//echo $no_of_participants;

$no_of_answers = mysqli_num_rows($result_responsetable);
$no_of_responses = $no_of_answers/($no_of_questions+1);
//echo $no_of_responses;

//percentage of response on scale of 1.0
$percentage_of_response = round($no_of_responses/$no_of_participants,2);

$onerow_surveytable = mysqli_fetch_row($result_surveytable);
$demographics_available = 0;
foreach($onerow_surveytable as $column){
  
  //echo $column;
   if($column){
     $demographics_available++;
   }
 }


 $demographics_available= $demographics_available-5;
 //echo $demographics_available;
 $beatsquotient = 0;
 $no_of_likertscale_answers =0;
 $count =0;
foreach($questions_arr as $question_id)
{
   
  $questiontypequery = "select question_type from questions_table where Id = ".$question_id.";";
  $result_questiontype=mysqli_query($dbconnect,$questiontypequery);
  
  $question_type = mysqli_fetch_row($result_questiontype);

//echo $question_type[0];

$questiontypearray[$count]=$question_type[0];
//sprint_r($questiontypearray);


          if($question_type[0]=='likertscale')
          {
           
               $answers_query = "select * from response_table where Project_id = ".$projectid." and questions = ".$question_id.";";
               $result_answers_likertscale = mysqli_query($dbconnect, $answers_query);
                         
               
               while($row = mysqli_fetch_assoc($result_answers_likertscale)) {
                $no_of_likertscale_answers = $no_of_likertscale_answers + 1;
                // echo $row["Answers"];
                            if($row["Answers"]=='Strongly agree'){
                              $beatsquotient = $beatsquotient+5;
                            }
                            if($row["Answers"]=='Agree'){
                             
                              $beatsquotient = $beatsquotient+4;
                            }
                            if($row["Answers"]=='Neither agree nor disagree'){
                              $beatsquotient = $beatsquotient+3;
                            }
                            if($row["Answers"]=='Disagree'){
                              $beatsquotient = $beatsquotient+2;
                            }
                            if($row["Answers"]=='Strongly_disagree'){
                              $beatsquotient = $beatsquotient+1;
                            }
                          }

             
            }
$count++;
}
//$questiontypearray[3]="open space";
//$questiontypearray[4]="open space";

//print_r($questiontypearray);


//to filer the repeating types
$questiontypeunique= array_unique($questiontypearray);
//to count unique values

$questiontypecount = array_count_values($questiontypearray);
//print_r($questiontypecount);
//echo $questiontypecount['open space'];

//print_r($questiontypeunique);
if($no_of_likertscale_answers){
$beatsquotient = $beatsquotient/$no_of_likertscale_answers;
}

//echo $beatsquotient;

$employeelistquery ="select * from survey_table where Project_id = ".$projectid.";";
$resultemployeelist=mysqli_query($dbconnect,$employeelistquery);

// $participantslist = mysqli_fetch_assoc($resultemployeelist);

 //print_r($participantslist);






 $querymood= "select * from response_table where questions = 'mood' and Project_id = ".$projectid.";";
 
$resultmood=mysqli_query($dbconnect, $querymood);
 
//  $moodarrayresult = mysqli_fetch_assoc();
 //echo sizeof($moodarrayresult);
$i = 0;
 while($row = mysqli_fetch_assoc($resultmood)){
         $moods= explode(',',$row['Answers']);
       // echo $row['Answers'];
         foreach($moods as $mo){
           $allmoods[$i] = $mo;
           $i++;
         }


 }
 //print_r($allmoods);

 //$moodarray['Easy']=0;
// $moodarray['Fun']=0;
//  $moodarray['Happy']=0;
//  $moodarray['Managable']=0;
//  $moodarray['Anger']=0;
//  $moodarray['Anxiety']=0;
//  $moodarray['Depression']=0;
//  $moodarray['Fear']=0;
//  $moodarray['Frustration']=0;


//print_r($allmoods);
 //echo $test[0];
 if(isset($allmoods)){
 $moodarray= array_count_values($allmoods);
 }
 //print_r($moodarray);



?>

<!DOCTYPE html>
<html>

<head>
	<title>Kaiwa | Dashboard</title>
	<link rel="icon" href="./assets/images/kaiwa.ico" type="image/png">
	<!--Import Google Icon Font-->
	<link href="material-icon\css\material-icons.css" rel="stylesheet"/>
	
	<!--Import materialize.css-->
	<link rel="stylesheet" href=".\materialize-v1.0.0\materialize\css\materialize.min.css">
	<link rel="stylesheet" href=".\materialize-v1.0.0\materialize\css\materialize.css">
	<!--Let browser know website is optimized for mobile-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<script src=".\jquery-3.5.1.min.js"></script>
	<script src=".\popper.min.js"></script>
	
	<script src="./chart/js/Chart.min.js"></script>
  <script src="./chart/css/Chart.css"></script>
  <script src="./chart/css/Chart.min.css"></script>
	 <script src=".\materialize-v1.0.0\materialize\js\materialize.min.js"></script>
	 <script src=".\materialize-v1.0.0\materialize\js\materialize.js"></script>
	 <script src="./progress.js"></script>

	 <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
	
	
<!-- Resources -->

</head>
<style type="text/css">


#container {
  margin: 20px;
  width: 200px;
  height: 100px;
}











	nav{
		/*background-color: #3494a3;
		 /*background-image: linear-gradient(to bottom right, #185a9d, #43cea2);*/
	     background-color: #a405a0;
	}
	.content{
		
		height:100%;
	}
	
	.sidenav{
	    /*background-color: #3494a3;*/
	    background-image: linear-gradient(to bottom right, #fd576b, #a405a0);
	}
	
	/*.card-bg{
		background: rgba(0,0,0,0);
	}*/
	@media only screen and (max-width: 992px){
		.content,nav{
			padding-left: 0;
		}
	}
	

	
	
	.a{
	padding:1px;
	color:white;
	
	}

	@media (max-width: 36em) {
  .radar {
	  height: 100px;
    /* Overrides the above styles on screens larger than 36em */
  }
}

.rating{
	color:black;
	font-weight: 25px;
	font-size: 25px;
}

.num{
background-color: #ffffff00;
 font-style: italic;
 color:orange;
 font-weight: 25px;
 font-size: 18px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 4; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: auto; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  
}

/* Modal Content */
.modal-content {

  margin: auto;
  /*padding: 20px;*/
  border: 1px solid #888;
  width: 90%;
  height:800px;
  z-index: 999;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.tab2,.tab3{
    z-index: -1;

    
}
.fixfixforfloat{
    z-index:-1;
}

.heatmap{
    margin-left:50px;
    padding-top:-20px;
}

@media only screen and (max-width: 600px) {
  .mob{
     padding-top:120px;
  }
}

@media only screen and (max-width: 900px) {
  .heatmap{
     margin-top:-100px;
     
  }
}

@media only screen and (max-width: 800px) {
  .heatmap1{
    text-align:center; 
     
  }
}

.floatbtn{
    z-index:1;
}

.object {
  animation: MoveUpDown 2s linear infinite;
  
}

@keyframes MoveUpDown {
  0%, 100% {
    margin-top: 0;
  }
  50% {
    margin-top: 10px;
  }

}

.object2{
  animation: MoveDownUp 2s linear infinite;
}

@keyframes MoveDownUp {
  0%, 100% {
    margin-top: 10px;
   
  }
  50% {
    margin-top: 0;
  }

}

</style>
<script type="text/javascript">




/*tabs*/


// Or with jQuery



function mandate(){
    

	// Get the modal
	var modal = document.getElementById("myModal");

  modal.style.display = "block";
	
	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");
	
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];
	
	// When the user clicks the button, open the modal 
	
	  
	
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	  modal.style.display = "none";
	}
	
	// When the user clicks anywhere outside of the modal, close it
	// window.onclick = function(event) {
	//   if (event.target == modal) {
	// 	modal.style.display = "none";
	//   }
	// }
	}


  function qcmmodal(){
    

    // Get the modal
    var modal = document.getElementById("qcm");
  
    modal.style.display = "block";
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[1];
    
    // When the user clicks the button, open the modal 
    
      
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function(event) {
    //   if (event.target == modal) {
    //   modal.style.display = "none";
    //   }
    // }
    }


    
  function responsemodal(){
    bar1.animate(<?php echo $percentage_of_response;?>); 
 
    // Get the modal
    var modal = document.getElementById("responsemodal");
  
    modal.style.display = "block";
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[2];
    
    // When the user clicks the button, open the modal 
    
      
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function(event) {
    //   if (event.target == modal) {
    //   modal.style.display = "none";
    //   }
    // }
    }

    function participantsmodal(){
    

    // Get the modal
    var modal = document.getElementById("participantsmodal");
  
    modal.style.display = "block";
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[3];
    
    // When the user clicks the button, open the modal 
    
      
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function(event) {
    //   if (event.target == modal) {
    //   modal.style.display = "none";
    //   }
    // }
    }

	  
</script>


<body style="overflow-x:hidden;">


        
   <!-- Trigger/Open The Modal -->
  

<!-- The Modal -->
<div id="myModal" class="modal" style="z-index: 1000;">
<span class="close" style="color:red;">&times;</span><br><br><br>
<div class="row" >
  <div class="col s12 m3 l3 card"><h5 style="color:gray; text-align:center;">Gender</h5>	
</div>
<div class="col s12 m3 l3 card" >	<h5 style="color:gray; text-align:center;">Designation</h5><div id="area" style="width: 300px; height: auto;"></div>
</div>
<div class="col s12 m3 l3 card" >	<h5 style="color:gray; text-align:center;">Department</h5>
        <div id="pie"></div>
</div>
<div class="col s12 m3 l3 card" ><h5 style="color:gray; text-align:center;">Tenure</h5>	<div id="pie1"></div>
</div>
   
   
</div>
  
 
 </div>

<style>
#questions{
  height:250px !important;
  width:auto !important;
}

.center {
  margin: auto;
  width: 50%;

  padding: 10px;
}
</style>

 <div id="qcm" class="modal" style="width:100%; max-width: 600px; overflow:hidden;padding:20px 20px;margin-top:30px;z-index:1000;">

<span class="close" style="color:red;">&times;</span><br><br>
<h5 style="text-align:center; color:gray">Question Distribution</h5>
<br>
<div style="margin-left:20%">
 <canvas id="questions" width="100%"></canvas>
</div>
</div>
   
   
</div>
  
 
 </div>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>

var ResponseCanvas = document.getElementById("questions");


Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var ResponseData = {
    labels: [
      <?php 
        $code="";
      foreach($questiontypeunique as $qt){
        if($qt=='open space'){
          $qt='Open Space';
        }

        if( $qt=='likertscale'){
          $qt='Likertscale';
        }

        if( $qt=='mcq'){
          $qt='MCQ';
        }
        if( $qt=='mcqm'){
          $qt='MCQ(Multi-select)';
        }
        $code .= '"'.$qt.'",';
      }
      echo $code;
        ?>
    ],
    datasets: [
        {
            data: [ 
              <?php
              foreach($questiontypecount as $c){
                echo $c.", ";
              }
              ?>
            ],
            backgroundColor : [
          "aqua", "salmon", "darkgray", "pink", "coral"
        ],
        }]
};





var pieChart = new Chart(ResponseCanvas, {
  type: 'pie',
  data: ResponseData,
  options: {
        legend: {
            display: true,
            position: 'right',
            labels: {
                fontSize: 20,
            }
          
        }
    }
});

</script>



<div id="responsemodal" class="modal col s12 " style="width:50%; overflow-x:hidden; overflow-y: scroll;padding:20px 20px;margin: auto;z-index:1000;">

<span class="close" style="color:red;">&times;</span><br><br>
<h5 style="text-align:center; color:gray">Percentage of Response</h5>
<br>


<div class="row " height="400px" width="400px">
 
 <div id="responsepercentchart" class="col s6 l4 m4" ></div>
 
 <div class="col s12 l6 m6" stlye="padding: 10px;"><br><br><h6 style="text-align:center"> <p >Higher percentage of response implies higher engagement.<p></h6></div>

</div>
   
   
</div>
  
 
 </div>
<style>
#responsepercentchart {
  margin: 20px;
  width: 200px;
  height: 200px;
  position: relative;
}
</style>

 <script>
 // progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

var bar1 = new ProgressBar.Circle(responsepercentchart, {
  color: '#aaa',
  // This has to be the same size as the maximum width to
  // prevent clipping
  strokeWidth: 4,
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 1400,
  text: {
    autoStyleContainer: false
  },
  
  from: { color: '#ED6A5A', width: 2 },
  to: { color: '#019448', width: 4 },
  // Set default step function for all animate calls
  step: function(state, circle) {
    circle.path.setAttribute('stroke', state.color);
    circle.path.setAttribute('stroke-width', state.width);

    var value = Math.round(circle.value() * 100);
    if (value === 0) {
      circle.setText('');
    } else {
      circle.setText(value+'%');
    }

  }
});
bar1.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar1.text.style.fontSize = '2rem';

 </script>

<div id="participantsmodal" class="modal" style="width:50%; overflow:hidden; padding:20px 20px;margin-top:30px;z-index:1000;">

<span class="close" style="color:red;">&times;</span><br><br>
<h5 style="text-align:center; color:gray" >List of Participants</h5>
<br>
<div style="overflow-y:scroll; height:300px;">
<table>
        <thead>
          <tr>
              <th>#</th>
              <th>Name</th>
             
          </tr>
        </thead>

        <tbody>

        <?php 
$p=1;
while($row=mysqli_fetch_assoc($resultemployeelist)){
  echo '<tr><td>'.$p.'</td><td>'.$row["Employee_name"].'</td></tr>';
 $p++;
}
          ?>
       
        </tbody>
      </table>
   
   
</div>
  
 
 </div>







 <span id="home"></span>
	<div class="navbar-fixed">
  
		<nav>
			<div class="nav-wrapper center-align" style="background-color:white;">
				<a href="" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons" style="color:purple;">menu</i></a>	
       <!-- <div> 
        
   <p style="text-align: center;"> <button type="submit" class="btn" style="Background-color :#DE3A7D; border-radius: 4px; "> Request for Deeper Analysis</button></p>

-->
<button onclick='logout()' class="white-text right hoverable" style="background-color:#ffffff00; border:none;position: relative; float: right"><i class="material-icons white-icon" style="margin-right:10px; color:purple;">power_settings_new</i></button>
<form method="POST" action="deepanalysis.php">
   <input type="hidden" name="projectid" value="<?php echo $projectid; ?>" />
<button type="submit" class="btn" style="Background-color :#DE3A7D; border-radius: 4px; position: relative; float: right; margin-top: 12px; margin-right: 20px"> Request for Deeper Analysis</button>
</form> 
			</div>
		</nav>
    
	</div>
	<ul class="sidenav bg" id="slide-out">
		<li>
			<div class="user-view">
				<div class="background">
					<img src="./assets/images/sidenav.jpg" width="100%">
				</div>
				<a href="#">
					<img src="./assets/images/kaiwa.png" class="circle">
				</a>	<a href="#" class="white-text name">Beats User</a>
				<!--	<a href="#" class="white-text email"></a>-->
			</div>
		</li>
		<li><a href="#home" class="white-text"><i class="material-icons white-icon">home</i>Home</a>
		</li>
    <li><a href="#moodanalysis" class="white-text"><i class="material-icons white-icon">sentiment_very_satisfied</i>Mood analysis</a>
		</li>
		
		<li><a href="#qwa" class="white-text"><i class="material-icons white-icon">filter_drama</i>Question wise Analysis</a>
		</li>

    <li><a href="#da" class="white-text"><i class="material-icons white-icon">insert_chart</i>Deeper Analysis</a>
		</li>
    
		<li><a href="mailto:pulse@culturelytics.in" class="white-text"><i class="material-icons white-icon">mail</i>Mail us</a>
		</li>

		<li><a onclick='logout()' class="white-text"><i class="material-icons white-icon">power_settings_new</i>Logout</a>
		</li>
	</ul>
	
		
<!-- 		
	<div class="row">
    <div class="col s12"><p>s12</p></div>
    <div class="col s12 m4 l2"><p>s12 m4</p></div>
    <div class="col s12 m4 l8"><p>s12 m4</p></div>
    <div class="col s12 m4 l2"><p>s12 m4</p></div>
  </div> -->
<br>
<style>
data-tooltip{
  color:red;
}
</style>



  <div class="row" style="margin:10px; margin-top:-10px;">

  <div class="col s12 m12 l4 card" style="padding: 20px 20px;text-align:center;">
  <h5 style="text-align:center; color:gray">Beats Quotient &nbsp;<a class="tooltipped" data-position="bottom" id="tooltip" data-tooltip='<div style="padding: 20px 20px; ><p style="text-align:left !important;"><img src="./kaiwa.png" height="50px" width="auto" style="margin-left:2px;"/></p><span style="text-align:left; justify-content:left;">Beats Quotient is an important metric in understanding the employee engagement based on responses</span></div>'><i class="material-icons white-icon" style="color:gray;">info</i></a></h5>
  <div style="margin-left:20%;">
 
<div id="container1"></div>
</div>
  </div>
  <div class="col s12 m12 l8">
    <div class="col s12 m6 l3"><div class="card box" onclick='qcmmodal()'   style=" background-color:#2d778a;margin: 5px 5px;padding:10px 10px;"><p style="text-align:center"><i class="material-icons white-icon" style="color:white;">question_answer</i></p><p style="color:white;text-align:center ">Questions</p><h3 style="color: white;text-align:center"><?php echo $no_of_questions;?> </h3></div></div>
    <div class="col s12 m6 l3 "><div class="card box" onclick='participantsmodal()' style=" background-color:#2d778a;margin: 5px 5px;padding:10px 10px;"><p style="text-align:center"><i class="material-icons white-icon" style="color:white;">group</i></p><p style="color:white; text-align:center">Participants</p><h3 style="color: white;text-align:center"><?php echo $no_of_participants;?></h3></div></div>
    <div class="col s12 m6 l3"><div class="card box" onclick='responsemodal()' style=" background-color:#2d778a;margin: 5px 5px;padding:10px 10px;"><p style="text-align:center"><i class="material-icons white-icon" style="color:white;">recent_actors</i></p><p style="color:white;text-align:center">Responses</p><h3 style="color: white;text-align:center"><?php echo $no_of_responses;?></h3></div></div>
	<div class="col s12 m6 l3 " ><div class="card box" id="myBtn"  style="background-color:#2d778a;margin: 5px 5px;padding:10px 10px;"><p style="text-align:center"><i class="material-icons white-icon" style="color:white;">pie_chart</i></p><p style="color:white;text-align:center ">Demographics</p><h3 style="color: white;text-align:center"><?php echo $demographics_available;?></h3> </div></div>
  </div>
  <span id="moodanalysis"></span>
  </div>





  <div class="row center-align card" style="padding:10px;"  id="mcqanalysis" >
<h5 style="text-align:center; color:gray" >Mood Analysis &nbsp;<a class="tooltipped" data-position="bottom" id="tooltip" data-tooltip='<div style="padding: 20px 20px; ><p style="text-align:left !important;"><img src="./kaiwa.png" height="50px" width="auto" style="margin-left:2px;"/></p><span style="text-align:left; justify-content:left;">Helps you in knowing the mood of your employees</span></div>'><i class="material-icons white-icon" style="color:gray;">info</i></a></h5>
<br><br>
<div class="col l3 m3 s12 card">
<label style="font-size:12px">Select visualization type</label>
  <select class="browser-default card " name="chartType" id="chartType" onchange="u()">
    <option value="radar" selected>Radar</option>
    <option value="bar">Bar</option>
    <!-- <option value="pie">Pie</option> -->
    <option value="line">Line</option>
  </select>
</div>
<div class="col l8 m8 s12">
<canvas id="moodchart"  height="100%"></canvas>
</div>
</div>

<span id="qwa"></span>
<br>


<div class="row card" style="padding:10px;">
<h5 style="text-align:center; color:gray" >Question Wise Analysis</h5>
<br>
<div class="col l4 m4 s12 card">
      <form method="POST">
    <?php  $p_id = $_POST['projectid']; ?>
      <input type="hidden" name="projectid" value="<?php echo $p_id; ?>" />
     <p style="text-align: center"> Select a question to visualize <p>
      <select class="browser-default" aria-label="Default select example" name="ques" onchange="this.form.submit()"  >
     <?php  if(isset($_POST['ques'])) 
     {
      $q = $_POST['ques'];

      $query4= "select question_text from questions_table where Id = ".$q.";";
      $result4 = mysqli_query($dbconnect,$query4);
      $queryquestiontype="select question_type from questions_table where Id = ".$q.";";
      $resultquestiontype=mysqli_query($dbconnect,$queryquestiontype);
      $questiontypeofq=mysqli_fetch_row($resultquestiontype);
      $questiontext = mysqli_fetch_row($result4);
      if($questiontext[0] == '')
      {
        $questiontext[0] = "All Questions";

      }
      else{
        if($questiontypeofq[0]=='open space'){
          $questiontypeofq[0]='Open Space';
        }

        if($questiontypeofq[0]=='likertscale'){
          $questiontypeofq[0]='Likertscale';
        }

        if($questiontypeofq[0]=='mcq'){
          $questiontypeofq[0]='MCQ';
        }
        if($questiontypeofq[0]=='mcqm'){
          $questiontypeofq[0]='MCQ(Multi-select)';
        }
      echo '<option onclick="myFunction()" value="'.$q.'">'. $questiontext[0].'&nbsp;<b>['.$questiontypeofq[0].']</b></option>';
    }
      
     }
     
     ?>
      <!-- <option value="any"> Select Question </option> -->
     <option value="any" > No question selected</option> 
      <?php

    
for($i=0;$i<sizeof($questions_arr);$i++)
{
  echo $questions_arr[$i];
  // echo '<option onclick="myFunction()" value="'.$row3['Questions'].'">"'.$questions_arr[$i] .'"</option>';

  $query4= "select question_text from questions_table where Id = ".$questions_arr[$i].";";
  $queryquestiontype2= "select question_type from questions_table where Id = ".$questions_arr[$i].";";
  $resultquestiontype2 = mysqli_query($dbconnect,$queryquestiontype2);
  $questiontype2 = mysqli_fetch_row($resultquestiontype2);
  $result4 = mysqli_query($dbconnect,$query4);
  $questiontext = mysqli_fetch_row($result4);


  if($questiontype2[0]=='open space'){
    $questiontype2[0]='Open Space';
  }

  if($questiontype2[0]=='likertscale'){
    $questiontype2[0]='Likertscale';
  }

  if($questiontype2[0]=='mcq'){
    $questiontype2[0]='MCQ';
  }
  if($questiontype2[0]=='mcqm'){
    $questiontype2[0]='MCQ(Multi-select)';
  }

 echo '<option value="'.$questions_arr[$i].'">'. $questiontext[0].'&nbsp;<b>['.$questiontype2[0].']</b></option>';

}


?>


</select>
</form>


</div>


<style>
  #table-wrapper {
  position:relative;
}
#table-scroll {
  height:150px;
  overflow:auto;  
  margin-top:20px;
}
#table-wrapper table {
  width:100%;

}
#table-wrapper table * {
  background-color: rgb(222,58,125,0.5);
  /* opacity: 0.5; */
  color:white;
}
#table-wrapper table thead th .text {
  position:absolute;   
  top:-20px;
  z-index:2;
  height:20px;
  width:35%;
  /* border:1px solid red; */
}
  </style>

       <div class="col l7 m7 s12">
   
      
       <?php
if(isset($_POST['ques']))
{
 
 // echo $presentquestion[0];


 if($q == 'any')
 {
 
  $sql = "select * from response_table where Project_id = ".$projectid.";";
  $result = mysqli_query($dbconnect, $sql);

//   if (mysqli_num_rows($result) > 0) {
//   echo '<div id="table-wrapper"> <div id="table-scroll">
// <table class='.'"'.'table'.'"'.'>
//   <thead>
//     <tr>
//       <th scope='.'"'.'col'.'"'.'>#</th>
//       <th scope='.'"'.'col'.'"'.'>Responses</th>
     
//     </tr>
//   </thead>
//   <tbody>
//   ';
//   $l=0;
//   $body="";
//   while($row = mysqli_fetch_assoc($result)) {
//     $l++;
//     // echo "" . $row["Answers"]. "<br>";
//     $body.= "
//     <tr>
//       <th scope=".'"'."row".'"'.">".$l."</th>
//       <td>".$row["Answers"]."</td>
      
//     </tr>
//   ";
//   }
// $body.="</tbody>
//   </table>
//   </div</div";

//  echo $body;

// }
  }
 else
 {
  $q = $_POST['ques'];
  // echo $q;
   $presentquestionquery = "select question_type from questions_table where Id= ".$q.";";
   $presentquestionresult = mysqli_query($dbconnect, $presentquestionquery);
    $presentquestion = $presentquestionresult->fetch_array();
  
  $questiontypequery = "select * from questions_table where Id= ".$q.";";
  $sql = "select * from response_table where Project_id = ".$projectid." and questions = ".$q.";";
  $questiontyperesult = mysqli_query($dbconnect, $questiontypequery);
  $questiontype= $questiontyperesult->fetch_assoc();
  $result = mysqli_query($dbconnect, $sql);
 }
 
 

if (mysqli_num_rows($result) > 0) {
  // output data of each row 
if(isset($questiontype)){
  // if($questiontype['question_type']=='openspace')   
  // {
  //   echo "<wordcloud style=".'"'."margin-left:30%".'"'."></wordcloud>";
  // }


  
    if($questiontype['question_type']=='likertscale')
    {

         $likertresult = array(0,0,0,0,0);
  
          echo "<canvas id=".'"'."responsechart2".'"'." width=".'"'."400".'"'." height=".'"'."130".'"'." ></canvas>";
    }
      }
$sa=0;
$a=0;
$nad=0;
$d=0;
$sd=0;
$textanswers='';

// if(isset($questiontype)){
//   if($questiontype['question_type']=='open space'){
// echo '<div id="table-wrapper"> <div id="table-scroll">
// <table class='.'"'.'table'.'"'.'>
//   <thead>
//     <tr>
//       <th scope='.'"'.'col'.'"'.'>#</th>
//       <th scope='.'"'.'col'.'"'.'>Responses</th>
     
//     </tr>
//   </thead>
//   <tbody>
//   ';

//   }
// }
  $l=0;
  $body="";
  $mcqcount=0;
  while($row = mysqli_fetch_assoc($result)) {
    $l++;

    // echo "" . $row["Answers"]. "<br>";
  //   if(isset($questiontype)){
  //     if($questiontype['question_type']=='open space'){
  //     $body.= "
  //   <tr>
  //     <th scope=".'"'."row".'"'.">".$l."</th>
  //     <td>".$row["Answers"]."</td>
      
  //   </tr>
  // ";
  //     }
  //   }


  $mcqanswer = array();

    if(isset($questiontype)){
      if($questiontype['question_type']=='mcq' ){

          $mcqanswers[$mcqcount] = $row["Answers"];
          $mcqcount++;
          // echo $mcqanswers[$mcqcount];
      }
      if($questiontype['question_type']=='mcqm'){
           
        $temp = explode(',',$row["Answers"]);
        for($i=0; $i<sizeof($temp); $i++){
          $mcqanswers[$mcqcount] = $temp[$i];
          $mcqcount++;
        }
        

     
      }

    //  echo $questiontype['question_type'];

    if($questiontype['question_type']=='open space'){

     
      $textanswers .= " ".mysqli_real_escape_string($dbconnect, $row["Answers"]);
    }
  }

    if($row["Answers"]=='Strongly agree'){
      $sa++;
      $likertresult[0]=$sa;
    }
    if($row["Answers"]=='Agree'){
      $a++;
      $likertresult[1]=$a;
    }
    if($row["Answers"]=='Neither agree nor disagree'){
      $nad++;
      $likertresult[2]=$nad;
    }
    if($row["Answers"]=='Disagree'){
      $d++;
      $likertresult[3]=$d;
    }
    if($row["Answers"]=='Strongly_disagree'){
      $sd++;
      $likertresult[4]=$sd;
    }
   
    
  }

//   if(isset($questiontype)){
//     if($questiontype['question_type']=='open space'){
// $body.="</tbody>
//   </table>
//   </div></div>";

//  echo $body;
//     }}
}
 else {
  echo "No Responses Yet";
}

}


 ?>
  
     <div>
     <?php
     if(isset($_POST['ques'])){
      if($q == 'any'){

      }
      else{
        $q = $_POST['ques'];
        // echo $q;
         $presentquestionquery = "select question_type from questions_table where Id= ".$q.";";
         $presentquestionresult = mysqli_query($dbconnect, $presentquestionquery);
          $presentquestion = $presentquestionresult->fetch_array();
        
       if($presentquestion[0] == 'open space'){
        echo "<div style=".'"'."display:block".'"'.">" ;
      
      ?>
      <!-- <canvas id="mcqchart"></canvas>-->
      <h6 style="text-align:center; color:gray">Wordcloud of Responses</h6>
      <wordcloud></wordcloud>
      <?php
      echo "</div>" ;
      }
      if($presentquestion[0] == 'mcq' || $presentquestion[0] == 'mcqm' ){
        ?>
      <div id="piechart_3d" style="width: 500px; height: 400px; margin-left: 20%"></div>
      <?php
      }
    }
    
    }
    ?>


</div>
<div>    
<span id="da"></span>
  </div>
</div>
       </div>
</div>

<?php 

if(isset($mcqanswers)){
$mcqunique= array_count_values($mcqanswers);
}

//print_r($likertresult);
//print_r($mcqunique);
?>




 <script type="text/javascript" src="https://cdn3.devexpress.com/jslib/20.2.6/js/dx.all.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Options', 'Percentage'],
          <?php 
          foreach($mcqunique as $key => $val){
            echo "["."'".$key."'".", ".$val."],";
          } ?>
          // ['Work',     11],
          // ['Eat',      2],
          // ['Commute',  2],
          // ['Watch TV', 2],
          // ['Sleep',    7]
        ]);

        var options = {
          title: '',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }




      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);

      function drawChart1() {
        var data1 = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2013',  1000,      400],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540]
        ]);

        var options1 = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart1 = new google.visualization.AreaChart(document.getElementById('area'));
        chart1.draw(data1, options1);
      }
  
    </script>
 
 

<script src="https://d3js.org/d3.v3.min.js"></script>
  <script src="https://rawgit.com/jasondavies/d3-cloud/master/build/d3.layout.cloud.js"></script>

<script>
var likertCanvas = document.getElementById("responsechart2");


likertoptions= {
              legend: {
            display: true,
            position: 'top',
            labels: {
                fontSize: 12,
            }
              },
             tooltips: {
            // Disable the on-canvas tooltip
            enabled: true,
            callbacks: {
        label: function(tooltipItem, data) {
          return  ((data['datasets'][0]['data'][tooltipItem['index']]/<?php if(array_sum($likertresult)){echo array_sum($likertresult);}?>)*100).toFixed(2) + '%';
        }
            }
        }
};

var likertData = {
    labels: [
        "Strongly Agree",
        "Agree",
        "Neither Agree nor disagree",
        "Disagree",
        "Strongly Disagree"
  
    ],
    datasets: [
        {
            data: [<?php  echo  $likertresult [0];?>, <?php echo  $likertresult[1];?>, <?php echo  $likertresult[2];?>, <?php echo  $likertresult[3];?>, <?php echo  $likertresult[4];?>],
            backgroundColor: [
              "#60F700",
                "#CFF700",
                "#F7F700",
                "#F7BB00",
                "#F70000"
            ]
        }]
};
var radarChart = new Chart(likertCanvas, {
  type: 'pie',
  data: likertData,
  options: likertoptions
});


var mcqCanvas = document.getElementById("mcqchart");

var mcqData = {
    labels: [
        "Strongly Agree",
        "Agree",
        "Neither Agree nor disagree",
        "Disagree",
        "Strongly Disagree"
  
    ],
    datasets: [
        {
            data: [1, 2, 3, 4, 5],
            backgroundColor: [
                "#60F700",
                "#CFF700",
                "#F7F700",
                "#F7BB00",
                "#F70000"
            ]
        }]
};


var mcq = new Chart(mcqCanvas, {
  type: 'pie',
  data: mcqData,
 
});




</script>



<div class="card row" style="padding-top: 10px;">

 <br>
<!-- <div class="col s12 m6 l6"> 
  <img src="./da.jpg"  height="400px" style="margin-left: 20%;" />
</div> -->

<div >
  
  <div class="row">
    <div class="col s3 m3 l3">
    <img src="./nlp.jpg"  height="52px" style="margin-left: 35%;" />
    <h6 style="margin-left: 47%;">NLP</h6>
     </div>
     <div class="col s3 m3 l3">
    <img src="./insights.jpg"  height="80px" style="margin-left: 20%;" />
    <h6 style="margin-left: 22%; margin-top: -8px;">Insights</h6>
     </div>
     <div class="col s2 m2 l2">
    <img src="./heatmap.png"  height="65px" style="margin-left: 0%;" />
    <h6 style="margin-left: 0%;margin-top: -6px">Heatmap</h6>
     </div>
     <div class="col s4 m4 l4">
     <h6 style="text-align: center;"><b>Get access to our Advanced Analysis<b></h6><br>
     
   <form method="POST" action="deepanalysis.php">
   <input type="hidden" name="projectid" value="<?php echo $p_id; ?>" />
   <p style="text-align: center; margin-top: -10px"> <button type="submit" class="btn" style="Background-color :#DE3A7D; border-radius: 4px; "> Request for Deeper Analysis</button></p>
</form>
     </div>
   </div>

  
</div>
<div>







  
  <!-- <div class="carousel" width="100% !important">
    <a class="carousel-item" href="#one!"><div class="card box" onclick='qcmmodal()'   style=" background-color:#2d778a;margin: 5px 5px;padding:10px 10px;"><p style="text-align:center"><i class="material-icons white-icon" style="color:white;">question_answer</i></p><p style="color:white;text-align:center ">Questions</p><h3 style="color: white;text-align:center"><?php echo $no_of_questions;?> </h3></div></a>
    <a class="carousel-item" href="#two!"><div class="card box" onclick='participantsmodal()' style=" background-color:#2d778a;margin: 5px 5px;padding:10px 10px;"><p style="text-align:center"><i class="material-icons white-icon" style="color:white;">group</i></p><p style="color:white; text-align:center">Participants</p><h3 style="color: white;text-align:center"><?php echo $no_of_participants;?></h3></div></a>
    <a class="carousel-item" href="#three!"><div class="card box" onclick='responsemodal()' style=" background-color:#2d778a;margin: 5px 5px;padding:10px 10px;"><p style="text-align:center"><i class="material-icons white-icon" style="color:white;">recent_actors</i></p><p style="color:white;text-align:center">Responses</p><h3 style="color: white;text-align:center"><?php echo $no_of_responses;?></h3></div></a>
    <a class="carousel-item" href="#four!"><div class="card box" id="myBtn" onclick='mandate()' style="background-color:#2d778a;margin: 5px 5px;padding:10px 10px;"><p style="text-align:center"><i class="material-icons white-icon" style="color:white;">pie_chart</i></p><p style="color:white;text-align:center ">Sample visualization</p><h3 style="color: white;text-align:center"><?php echo $demographics_available;?></h3> </div></a>
    
  </div> -->
  <!-- <span id="textanalysis"></span>
  </div> -->




<!-- <style>
#moodchart{
  height:300px !important;
  width:500px !important;
}
</style> -->

<script>
function u(){
                // Destroy the previous chart
				chart8.destroy();
                // Draw a new chart on the basic of dropdown
                chart8 = new Chart(moodchart, {
					type: document.getElementById("chartType").value,  // Select chart type from dropdown
					data:mooddata,
			    options : moodoptions
				});
		
			};
</script>






<script>


$('.tooltipped').tooltip();
 
   

    $('.carousel').carousel();
 

  $(".box").hover(
      function () {
        $(this).addClass("box-hover");
        $(this).addClass("object");
      },
      function () {
        $(this).removeClass("box-hover");
        $(this).removeClass("object");
      }
    );
</script>

<style>
.box-hover{
  background-image: linear-gradient(to bottom right, #fd576b, #a405a0) !important;
}
#pie{
  height: 200px;
  width: 300px;
}

#pie1{
  height: 200px;
  width: 300px;
}

</style>





<!--
  wordcloud -->

  <script src="https://d3js.org/d3.v3.min.js"></script>
  <script src="https://rawgit.com/jasondavies/d3-cloud/master/build/d3.layout.cloud.js"></script>
  <script>

// Simple animated example of d3-cloud - https://github.com/jasondavies/d3-cloud
// Based on https://github.com/jasondavies/d3-cloud/blob/master/examples/simple.html

// Encapsulate the word cloud functionality


function wordCloud(selector) {

    var fill = d3.scale.category20();

    //Construct the word cloud's SVG element
    var svg = d3.select(selector).append("svg")
        .attr("width", 500)
        .attr("height", 500)
        .append("g")
        .attr("transform", "translate(250,250)");


    //Draw the word cloud
    function draw(words) {
        var cloud = svg.selectAll("g text")
                        .data(words, function(d) { return d.text; })

        //Entering words
        cloud.enter()
            .append("text")
            .style("font-family", "Impact")
            .style("fill", function(d, i) { return fill(i); })
            .attr("text-anchor", "middle")
            .attr('font-size', 1)
            .text(function(d) { return d.text; });

        //Entering and existing words
        cloud
            .transition()
                .duration(600)
                .style("font-size", function(d) { return d.size + "px"; })
                .attr("transform", function(d) {
                    return "translate(" + [d.x, d.y] + ")rotate(" + d.rotate + ")";
                })
                .style("fill-opacity", 1);

        //Exiting words
        cloud.exit()
            .transition()
                .duration(200)
                .style('fill-opacity', 1e-6)
                .attr('font-size', 1)
                .remove();
    }


    //Use the module pattern to encapsulate the visualisation code. We'll
    // expose only the parts that need to be public.
    return {

        //Recompute the word cloud for a new set of words. This method will
        // asycnhronously call draw when the layout has been computed.
        //The outside world will need to call this function, so make it part
        // of the wordCloud return value.
        update: function(words) {
            d3.layout.cloud().size([300, 300])
                .words(words)
                .padding(5)
                .rotate(function() { return ~~(Math.random() * 2) * 90; })
                .font("Impact")
                .fontSize(function(d) { return d.size; })
                .on("end", draw)
                .start();
        }
    }

}

//Some sample data - http://en.wikiquote.org/wiki/Opening_lines
var words = [
  <?php 
   if(isset($textanswers)){
     echo '"'.$textanswers.'"';
   }
   else{
   echo '"'." ".'"';
   }
   ?>
    ]
//Prepare one of the sample sentences by removing punctuation,
// creating an array of words and computing a random size attribute.
function getWords(i) {
    return words[i]
            .replace(/[!\.,:;\?]/g, '')
            .split(' ')
            .map(function(d) {
                return {text: d, size: 10 + Math.random() * 60};
            })
}

//This method tells the word cloud to redraw with a new set of words.
//In reality the new words would probably come from a server request,
// user input or some other source.
function showNewWords(vis, i) {
    i = i || 0;

    vis.update(getWords(i ++ % words.length))
    setTimeout(function() { showNewWords(vis, i + 1)}, 2000)
}



//Start cycling through the demo data
var myWordCloud = wordCloud('wordcloud');

showNewWords(myWordCloud);





</script>







   

    <script>

    
	
		$('.sidenav').sidenav();


    
    $(function(){
    $("#pie").dxPieChart({
        type: "doughnut",
        palette: "Soft Pastel",
        dataSource: dataSource,
        title: "The Population of Continents and Regions",
        title:{
          visible: false,
        },
        tooltip: {
            enabled: true,
            format: "millions",
            customizeTooltip: function (arg) {
                return {
                    text: arg.valueText + " - " + (arg.percent * 100).toFixed(2) + "%"
                };
            }
        },
        legend: {
          visible: false,
            horizontalAlignment: "right",
            verticalAlignment: "top",
            margin: 0
        },
        "export": {
            enabled: false
        },
        series: [{        
            argumentField: "region",
            label: {
                visible: true,
                format: "millions",
                connector: {
                    visible: true
                }
            }
        }]
    });

    $("#pie1").dxPieChart({
        type: "doughnut",
        palette: "Soft Pastel",
        dataSource: dataSource,
        title: "The Population of Continents and Regions",
        title:{
          visible: false,
        },
        tooltip: {
            enabled: true,
            format: "millions",
            customizeTooltip: function (arg) {
            
                return {
                    text: "<b>"+arg.argumentText+"</b><br>"+ arg.valueText + " - " + (arg.percent * 100).toFixed(2) + "%" ,
                   
                    
                };
            }
        },
        legend: {
          visible: false,
            horizontalAlignment: "right",
            verticalAlignment: "top",
            margin: 0
        },
        "export": {
            enabled: true
        },
        series: [{        
            argumentField: "region",
            label: {
                visible: true,
                format: "millions",
                connector: {
                    visible: true
                }
            }
        }]
    });
});

var dataSource = [{
    region: "Asia",
    val: 4119626293
}, {
    region: "Africa",
    val: 1012956064
}, {
    region: "Northern America",
    val: 344124520
}, {
    region: "Latin America and the Caribbean",
    val: 590946440
}, {
    region: "Europe",
    val: 727082222
}, {
    region: "Oceania",
    val: 35104756
}];
    </script>
 


 <link href=" https://cdn3.devexpress.com/jslib/20.2.6/css/dx.light.css" rel="stylesheet" type="text/css">
  <link href="https://cdn3.devexpress.com/jslib/20.2.6/css/dx.common.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">


<style>
#container1 {
    margin: 20px;
    width: 200px;
    height: 100px;
  }

</style>

<script src="./progress.js"></script>

<script>


// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

var bar = new ProgressBar.SemiCircle(container1, {
  strokeWidth: 6,
  color: '#FFEA82',
  trailColor: '#eee',
  trailWidth: 1,
  easing: 'easeInOut',
  duration: 1400,
  svgStyle: null,
  text: {
    value: '',
    alignToBottom: false
  },
  from: {color: '#ED6A5A'},
  to: {color: <?php if($beatsquotient < 3){echo "'".'#f7180c'."'";} elseif($beatsquotient >= 3 && $beatsquotient < 4){echo"'".'#cf8002'."'";}  else{echo"'".'#02cf4d'."'";}?>},
  // Set default step function for all animate calls
  step: (state, bar) => {
    bar.path.setAttribute('stroke', state.color);
    var value = bar.value()*5 ;
    value = +value.toFixed(2);
    if (value === 0) {
      bar.setText('');
    } else {
      bar.setText(value);
    }

    bar.text.style.color = state.color;
  }
});
bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
bar.text.style.fontSize = '2rem';

bar.animate(<?php echo $beatsquotient/5;?>);  // Number from 0.0 to 1.0








function checktype()
{

  if( window['type']){
  return 'radar';
  }
  else{
    return 'bar';
  }
}


mooddata= {
			labels:['EASY 😇 ','ENGAGED 🧐 ','FUN 🤗 ','HAPPY 😀','MANAGABLE 🙂 ','ANGER 😡 ','ANXIETY 😓 ','DEPRESSION 😖','FEAR 😰 ','FRUSTRATION 😤 '],
			datasets:[{
            labels:["EASY 😇 ","ENGAGED 🧐 ","FUN 🤗 ","HAPPY 😀","MANAGABLE 🙂 ","ANGER 😡 ","ANXIETY 😓 ","DEPRESSION 😖","FEAR 😰 ","FRUSTRATION 😤 "],
			data:[
        <?php if(isset($moodarray['Easy'])){echo $moodarray['Easy'];}else{ echo 0;}?>, 
      <?php  if(isset($moodarray['Engaged'])){echo $moodarray['Engaged'];}else{ echo 0;}?>,
      <?php  if(isset($moodarray['Fun'])){echo $moodarray['Fun'];}else{ echo 0;}?>, 
      <?php  if(isset($moodarray['Happy'])){echo $moodarray['Happy'];}else{ echo 0;}?>, 
      <?php  if(isset($moodarray['Managable'])){echo $moodarray['Managable'];}else{ echo 0;}?>, 
      <?php  if(isset($moodarray['Anger'])){echo $moodarray['Anger'];}else{ echo 0;}?>, 
      <?php  if(isset($moodarray['Anxiety'])){echo $moodarray['Anxiety'];}else{ echo 0;}?>, 
      <?php  if(isset($moodarray['Depression'])){echo $moodarray['Depression'];}else{ echo 0;}?>, 
      <?php  if(isset($moodarray['Fear'])){echo $moodarray['Fear'];}else{ echo 0;}?>, 
      <?php  if(isset($moodarray['Frustration'])){echo $moodarray['Frustration'];}else{ echo 0;}?>],
			
			backgroundColor:['#074B6E'],
			pointBackgroundColor:['green','green','green','green','green','red','red','red','red','red'],
			borderWidth:10
		
			
			/*borderColor:['#ffffff','#ffffff'],*/
			}]
			};

      moodoptions= {
			    			    scale: {
                      ticks: {
        callback: function() {return ""},
        backdropColor: "rgba(0, 0, 0, 0)"
    },
                 pointLabels: {
                 fontSize: 12
                }
              },
			 tooltips: {
            // Disable the on-canvas tooltip
            enabled: true,
            callbacks: {
        label: function(tooltipItem, data) {
          return  ((data['datasets'][0]['data'][tooltipItem['index']]/<?php if(array_sum($moodarray)){echo array_sum($moodarray);}?>)*100).toFixed(2) + '%';
        }
            }
        },
			title:{
			display:false,
			text:'Employee Feelings',
			fontSize:30,
			fontColor: 'gray',
			defaultFontStyle: 'normal'
			
			},
			legend:{
        display: false,
			position:'right',
			}
			};
			
var moodchart=document.getElementById('moodchart').getContext('2d');

var chart8=new Chart(moodchart,
			
			{
		    type: 'radar',
			
			data:mooddata,
			options : moodoptions
            
			
			});
			
moodchart.options.legend.display=false;
			




</script>





<div id="likertscale">

</div>
<div id="openspace">
</div>

<div id="mcq">

<div>
		<script>
			
			
			
			
			
			function logout(){

			                      
			        window.location.href = "./";
			    }
		</script>
		 
</body>

</html>

<?php
			}

}
    else{
      echo "You do not have the sufficient permissions to view the Dashboard for this Project.";
    }
  
}

?>

<!--php
include './footer.php';
}

  else
  {
           function function_alert($message) { 
      
             // Display the alert box  
          echo "<script>alert('$message');</script>";
              }
 
  
  
          // Function call 
         function_alert("You are logged out, login again!");
         include('index.php');
      
  }


}
else
{
header("Location: ./");
   exit();
   session_destroy();
}

?>









