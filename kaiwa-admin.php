
<?php

include 'config.php';
if (!isset($_SESSION)){
  session_start();

if($_SESSION['logged_in']!=1)
{ 

  header("Location: ./");

}
if($_SESSION['logged_in']==1)
{

  
function destroysession(){
  $_SESSION['logged_in']==0;
			       session_destroy(); 
}
?> 

<!DOCTYPE html>
<html>

<head>
  <title>Kaiwa | Dashboard</title>
  <link rel="icon" href="./assets/images/kaiwa.ico" type="image/png">
  <!--Import Google Icon Font-->
  <link href="material-icon\css\material-icons.css" rel="stylesheet"/>
  
  <!--Import materialize.css-->
  <link rel="stylesheet" href="..\dashboard-kaiwa\materialize-v1.0.0\materialize\css\materialize.min.css">
  <link rel="stylesheet" href="..\dashboard-kaiwa\materialize-v1.0.0\materialize\css\materialize.css">
  <!--Let browser know website is optimized for mobile-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <script src="..\dashboard-kaiwa\jquery-3.5.1.min.js"></script>
  <script src="..\dashboard-kaiwa\popper.min.js"></script>
  
  <script src="..\dashboard-kaiwa\chart\js\Chart.min.js"></script>
  <script src="..\dashboard-kaiwa\chart\css\Chart.css"></script>
  <script src="..\dashboard-kaiwa\chart\css\Chart.min.css"></script>
   <script src="..\dashboard-kaiwa\materialize-v1.0.0\materialize\js\materialize.min.js"></script>
   <script src="..\dashboard-kaiwa\materialize-v1.0.0\materialize\js\materialize.js"></script>
   <script type="text/javascript"></script>


  <!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<style>
      html {
  box-sizing: border-box;
}

*, *::after, *::before {
  box-sizing: inherit;
}



.pen-title {
  color: #FFFFFF;
  margin-bottom: 0;
  text-align: center;
  text-shadow: 1px 1px 0 #000;
}

.pen-description {
  color: #FFFFFF;
  margin-bottom: 3rem;
  text-align: center;
  text-shadow: 1px 1px 0 #000;
}
.pen-description a {
  color: #FFFFFF;
  text-decoration: underline;
}

a {
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}

img {
  height: auto;
  max-width: 100%;
}

.wrap {
  max-width: 85.375rem;
  margin: 0 auto;
}

.image-as-background {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.screen-reader-text {
  height: auto;
  width: 1px;
  clip: rect(1px, 1px, 1px, 1px);
  height: 1px;
  overflow: hidden;
  position: absolute !important;
}
.screen-reader-text:hover, .screen-reader-text:active, .screen-reader-text:focus {
  height: auto;
  width: auto;
  background-color: #000000;
  border-radius: 2px;
  box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
  clip: auto !important;
  color: #FFFFFF;
  display: block;
  font-size: 0.875rem;
  font-weight: 700;
  left: 0.3125rem;
  line-height: normal;
  padding: 0.9375rem 1.4375rem 0.875rem;
  text-decoration: none;
  top: 0.3125rem;
  z-index: 100000;
}

.form .chosen-container {
  font-size: 1rem;
  background-color: blue;
}
.form .chosen-container .chosen-single,
.form .chosen-container .chosen-drop {
  border: none;
  border-radius: 0;
  box-shadow: none;
 
}
.form .chosen-container-active.chosen-with-drop .chosen-single,
.form .chosen-container-active .chosen-choices {
  border: none;
  border-radius: 0;
  box-shadow: none;
  
}
.form .chosen-container-active .chosen-results .highlighted {
  background: #21759b;
   
}


        
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
<script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.js"></script>
</head>

<style>

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}
#chartdiv {
  width: 100%;
  height: 80vh;
}


.tabme{
  height: 58px;
  width:100%;
  background:#155e8f;
  color: white;
  border-radius:2px;
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


.tab2,.tab3,.tab4,.tab5{
    z-index: -1;
    font-size: 12px !important;

    
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

.modal{
  border-radius: 0px !important;
  padding:30px;

}



.ajax-loader {
  visibility: hidden;
  background-color: rgba(255,255,255,0.7);
  position: absolute;
  z-index: +100 !important;
  width: 100%;
  height:100%;
}

.ajax-loader img {
 
  position: absolute;
  z-index: +100 !important;
  width: auto;
  height:100%;
}

</style>



<body style="overflow-x:hidden;" id="home">
   
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper center-align" style="background-color:white;"><a href="#" class="" style="font-size:15px; color:purple;">
       
        <button id="logout" onclick='logout()' class="white-text right hoverable" style="background-color:#ffffff00; border:none;"><i class="material-icons white-icon" style="margin-right:10px; color:purple;">power_settings_new</i></button>
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
        </a>  <a href="#" class="white-text name">Bradford For Everyone</a>
        <!--  <a href="#" class="white-text email"></a>-->
      </div>
    </li>
    <li><a href="#home" onclick="hidesidenav()" class="white-text"><i class="material-icons white-icon">home</i>Home</a>
    </li>
    <li><a href="#home" onclick="hidesidenav()" class="white-text"><i class="material-icons white-icon">filter_center_focus</i>Dimension Wise Analysis</a>
    </li>
    <li><a href="#feeling" onclick="hidesidenav()" class="white-text"><i class="material-icons white-icon">sentiment_very_satisfied</i>Feeling analysis</a>
    </li>
    <li><a href="#word" onclick="hidesidenav()" class="white-text"><i class="material-icons white-icon">filter_drama</i>Text Analysis</a>
    </li>
    <li><a href="mailto:pulse@culturelytics.in" class="white-text"><i class="material-icons white-icon">mail</i>Mail us</a>
    </li>
    <li><a onclick='logout()' class="white-text"><i class="material-icons white-icon">power_settings_new</i>Logout</a>
    </li>
  </ul>



  

  <div id="project_submit"  class="card" style="display:block; margin:20px; padding:30px;">

<p><b>Step 1: Add questions to bucket</b></p>

<div class="row">
<a href="#ex1" class="btn blue" rel="modal:open"> + Add text question</a>
<a href="#ex2" class="btn blue" rel="modal:open"> + Add likert scale</a>
<a href="#ex3" class="btn blue" rel="modal:open"> + Add MCQ Question</a>
</div>
<br>
<hr>
<br>


<p><b>Step 2: Create project</b></p>
<form id="projectform" name="contact" action="">
  <fieldset>

    <div class="input-box">
    <label for="name" id="name_label">Organisation Name</label>
    <input type="text" name="orgname" id="name"  placeholder="enter the name of your organisation" class="text-input" required/>
    </div>
     
    <div class="input-box">
    <label for="email" id="email_label">Project Name</label>
    <input type="text" name="projectname" id="email" placeholder="enter the name of your project" class="text-input"/>
    </div>
    
     
    <input type="submit" name="submit" class="btn blue" id="submit_btn" value="Create project" />
  </fieldset>
</form>
</div>

<p id="result"></p>
<div id="question_submit"    class="card" style="display:none; text-align: center; margin:20px; padding:20px;" >

<p><b>Step 3: Add Questions to your survey<b></p>

<div id="ex1" class="modal">
 
<form id="textquestion">



<input type="text" id="question"  placeholder="Enter your question"  name="textquestion"/> 

<input type="submit" name="submit" class="btn blue" id="submit_btn" value="add open space question" />


</form>

<h1 id="textquestionid"></h1>
</b></b>
</div>


<div id="ex2" class="modal">
 
<form id="likertscaleform">



<input type="text" id="question" placeholder="Enter your question" name="textquestion"/>

<input type="text" id="r1" name="r1" placeholder="Enter chatbot response for Strongly Agree"/>

<input type="text" id="r2" name="r2" placeholder="Enter chatbot response for Agree"/>

<input type="text" id="r3" name="r3" placeholder="Enter chatbot response for Neither Agree nor Disagree"/>
<input type="text" id="r4" name="r4" placeholder="Enter chatbot response for Disagree"/>
<input type="text" id="r5" name="r5"placeholder="Enter chatbot response for Stongly Disagree"/>

<input type="submit" name="submit" class="btn blue" id="submit_btn" value="add likertscale question" />


</form>

<p id="likertscaleid"></p>

</div>



<div id="ex3" class="modal">
<form id="mcqform">



<input type="text" id="question" placeholder="Enter your question" name="textquestion"/>

<div id="item" class="form-group">
  <div class="input-group">
                                    <label class="label">Options</label></label>      
                                        </div>
</div>

</fieldset>


  <button style="background-color:  #7bbff0;font-size:14px;height:35px; width: 130px; color:white;" id="addoption" class=" " type="button" >+ Add options</button> <button style="background-color: red;font-size:14px;height:35px; width: 130px; color:white;" class="delete ">- Remove</button>
   <br>                                     
   <script>
       
       $(document).ready(function() {
  $(".delete").hide();
  //when the Add Field button is clicked
  $("#addoption").click(function(e) {
    $(".delete").fadeIn("1500");
    //Append a new row of code to the "#items" div
    $("#item").append(
      '<div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter option" class="form-control input-md input--style-4"  name="options[]" required></div><br><div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter response for options" class="form-control input-md input--style-4"  name="responses[]" required></div><br><br>'
    );
  });
  $("body").on("click", ".delete", function(e) {
    $(".next-referral").last().remove();
  });
});

   </script> 



<input type="submit" name="submit" class="btn blue" id="submit_btn" value="add MCQ question" />


</form>

<p id="mcqid"></p>

</div>



<br>

<?php  


$query = "select * from questions_table ORDER BY id DESC";

$result=mysqli_query($dbconnect,$query);
?>



  
<form id="foo_form">
<input type="text" id="projectidd" name="projectid" style="display:none;"/> 
            <label for="foo_select" class="screen-reader-text">Click to select questions list</label>
            <select id="foo_select" name="questionsselected[]" class="dropdown" form="foo_form" multiple data-placeholder="Click to select questions list...">
               
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
           echo "<option value=".'"'.$row['Id'].'"'.">".$row['question_text']."</option>";
            }
              ?>

            </select>

            <input type="submit" name="submit" class=" blue btn" id="submit_btn" value="Add questions to your survey" />
        </form>

        <script>
        /**
 * Chosen: Multiple Dropdown
 */
window.WDS_Chosen_Multiple_Dropdown = {};
( function( window, $, that ) {

	// Constructor.
	that.init = function() {
		that.cache();

		if ( that.meetsRequirements ) {
			that.bindEvents();
		}
	};

	// Cache all the things.
	that.cache = function() {
		that.$c = {
			window: $(window),
			theDropdown: $( '.dropdown' ),
		};
	};

	// Combine all events.
	that.bindEvents = function() {
		that.$c.window.on( 'load', that.applyChosen );
	};

	// Do we meet the requirements?
	that.meetsRequirements = function() {
		return that.$c.theDropdown.length;
	};

	// Apply the Chosen.js library to a dropdown.
	// https://harvesthq.github.io/chosen/options.html
	that.applyChosen = function() {
		that.$c.theDropdown.chosen({
			inherit_select_classes: true,
			width: '300px',
		});
	};

	// Engage!
	$( that.init );

})( window, jQuery, window.WDS_Chosen_Multiple_Dropdown );
        </script>
</div>

<div id="employee_submit"   class="card" style="display:none; text-align: center; margin:20px; padding:20px;"  style="display:none">

<div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">project ID</th>  
                               <th width="25%"> employee Name</th>  
                               <th width="35%">survey link</th>  
                               <th width="10%">mail id</th>  
                             
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["id"]; ?></td>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><?php echo $row["address"]; ?></td>  
                               <td><?php echo $row["gender"]; ?></td>  
                               <td><?php echo $row["designation"]; ?></td>  
                               <td><?php echo $row["age"]; ?></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
<form id="employeeform">

<input type="text" id="projectidemployee" name="projectid" style="display:none"/> 




<div id="items" class="form-group" >
  <div class="input-group">
                                    <label class="label">Employees</label></label>      
                                        </div>
</div>

</fieldset>


  <button style="background-color:  #7bbff0;font-size:14px;height:35px; width: 130px; color:white;" id="add" class=" " type="button" >+ Add employee</button> <button style="background-color: red;font-size:14px;height:35px; width: 130px; color:white;" class="delete ">- Remove</button>



 <div class="ajax-loader">
  <img src="./load.gif" class="img-responsive" />
</div>                                       
   <script>
       
       $(document).ready(function() {
  $(".delete").hide();
  //when the Add Field button is clicked
  $("#add").click(function(e) {
    $(".delete").fadeIn("1500");
    //Append a new row of code to the "#items" div
    $("#items").append(
      '<div class=" row next-referral "><input  id="textinput"  type="text" placeholder="Enter name of employee" class="form-control input-md input--style-4"  name="employees[]" required><input  id="textinput"  type="text" placeholder="Enter name of employee mail " class="form-control input-md input--style-4"  name="mails[]" required></div>'
    );
  });
  $("body").on("click", ".delete", function(e) {
    $(".next-referral").last().remove();
  });
});

   </script> 


   <br>               
<input type="submit" name="submit" class="btn blue" id="submit_btn" value="submit employees list" />
</form>


<form id="upload_csv" method="post" enctype="multipart/form-data">  
                     <div class="col-md-3">  
                          <br />  
                          <label>Add More Data</label>  
                     </div> 
                     <input type="text" id="projectidemployeeimport" name="projectid" style="display:none"/>  
                     <div class="col-md-4">  
                          <input type="file" name="employee_file" style="margin-top:15px;" />  
                     </div>  
                     <div class="col-md-5">  
                          <input type="submit"  class="blue btn"name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />  
                     </div>  
                     <div style="clear:both"></div>  
                </form> 

               
           </div>  
</div>


 <script>

 

$("#projectform").on("submit", function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "./create_project.php",
      data: dataString,
      success: function (data) {
        // Display message back to the user here
        console.log(data);
        var project_id = data;
        // $("#result").text(" project created");
        $("#project_submit").css("display","none");
        $("#question_submit").css("display","block");
        $("#projectid").val(data);
        $("#projectidd").val(data);
              }
    });
 
    e.preventDefault();
});






$("#foo_form").on("submit", function (e) {
  e.preventDefault();
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "./add_question.php",
      data: dataString,
      success: function (data) {
        // Display message back to the user here
        console.log(data);
        var project_id = data;
        // $("#result").text(data);
        $("#question_submit").css("display","none");
        $("#employee_submit").css("display","block");
        $("#projectidemployee").val(data);
        $("#projectidemployeeimport").val(data);
       
              }
    });
 
   
});


$("#employeeform").on("submit", function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "./add_employees.php",
      data: dataString,
      success: function (data) {
        // Display message back to the user here
        console.log(data);
        
        $("#employee_submit").css("display","none");
        $("#result").html(data);
       
      
      
              }
    });
 
    e.preventDefault();
});


$("#textquestion").on("submit", function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "./add_textquestion.php",
      data: dataString,
      success: function (data) {
        // Display message back to the user here
        console.log(data);
        
        $("#textquestion").css("display","none");
        $("#textquestionid").html("question added");
       
      
      
              }
    });
 
    
});



$("#likertscaleform").on("submit", function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "./add_likertscale.php",
      data: dataString,
      success: function (data) {
        // Display message back to the user here
        console.log(data);
        
       
        $("#likertscaleid").text("question added");
       
      
      
              }
    });
 
   
});


$("#mcqform").on("submit", function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "./add_mcqquestion.php",
      data: dataString,
      success: function (data) {
        // Display message back to the user here
        console.log(data);
        
       
        $("#mcqid").text("question added");
       
      
      
              }
    });
 
   
});





$('#upload_csv').on("submit", function(e){  
                e.preventDefault();
                
                 //form will not submitted  
                $.ajax({  
                     url:"import.php",  
                     method:"POST",  
                     beforeSend: function(){
    $('.ajax-loader').css("visibility", "visible");
  },
                     data:new FormData(this),  
                     contentType:false,          // The content type used when sending data to the server.  
                     cache:false,                // To unable request pages to be cached  
                     processData:false,          // To send DOMDocument or non processed data file it is set to false  
                     success: function(data){  
                          if(data=='Error1')  
                          {  
                               alert("Invalid File");  
                          }  
                          else if(data == "Error2")  
                          {  
                               alert("Please Select File");  
                          }  
                          else  
                          {  
                               $('#employee_table').html(data);  
                          }  
                     } ,
                     complete: function(){
    $('.ajax-loader').css("visibility", "hidden");
  } 
                }) 
                
                 
           }); 

          

           function logout(){

            
			           
			        window.location.href = "./";
			    } 
 </script>

</body>


</html>

 
<?php

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










