
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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.js"></script>

    <style>
  

.landing {
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.center{
    text-align:center;
    content-align:center
}

.kaiwabuttons{
    background-color: #329FD9;
}

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


  </head>
  <body>


<!---question list-->
<?php
if(isset($_POST['projectid'])){
    $projectid= $_POST['projectid'];
  }

  
  if(isset($_POST['OLTJ'])){
    $query = "select * from questions_table  WHERE project_id = 0";
  
    $result=mysqli_query($dbconnect,$query);
  
  }
  elseif(isset($_POST['WB'])){
    $query = "select * from questions_table  WHERE project_id = -1";
  
    $result=mysqli_query($dbconnect,$query);
  }
  else{
    $query = "select * from questions_table  WHERE project_id =$projectid";
  
    $result=mysqli_query($dbconnect,$query);
  }
 

 

  
?>


<div class="landing" id="add-questions">


       <h3 class="center">Add them to the survey!</h3>
        <div class="row row-cols-1 row-cols-md-1">
             <div class="col" >
               <div class="card h-100" >
                  <img src="./assets/images/chatlaunch.gif" class="card-img-top"  alt="...">
               <div class="card-body">
                     <h5 class="card-title center">Add questions flow</h5>
                     
                     <!-- <form id="test" action="" method="post">
    <button name="test">Get questions list</button>
</form> -->
<!-- 
<script>
$("#test").on("submit", function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
      type: "POST",
      url: "./getquestions.php",
      data: dataString,
      success: function (data) {
        // Display message back to the user here
        console.log(data);
        $('#a').html(data);
      
      
              }
    });
 
    e.preventDefault();
});
</script> -->
               <p class="card-text center">
            
             
            
           <div id="test" style="text-align: center;margin:5px;">
           <form id="foo_form" action="">
           <input type="text" class="project-id" value="<?php echo $projectid;?> " name="projectid" style="display:none;"/> 
            <label for="foo_select" class="screen-reader-text">Click to select questions list</label>
            <select id="foo_select" name="questionsselected[]" class="dropdown" form="foo_form" multiple data-placeholder="Click to select questions list...">
               
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
           echo "<option value=".'"'.$row['Id'].'"'.">".$row['question_text']."&nbsp;<span style=".'"'."margin-left:80% !important;".'"'."><b> [".$row['question_type']."]</b></span></option>";
            }
              ?>

            </select>
<!-- <div id="a"> </div>
          -->
       

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
			width: '500px',
      height: '300px'
		});
	};

	// Engage!
	$( that.init );

})( window, jQuery, window.WDS_Chosen_Multiple_Dropdown );
        </script>
          </div>
          
        </p>
      </div>
      <div class="card-footer center" >
      <button type="submit" class="btn btn-primary kaiwabuttons" >Confirm and Next</button>
      </div>
</form>
    </div>
  </div>

</div>
  

</div>









<!--add-employees-->
<div class="landing" id="add-employees" style="display: none;">


      
        <div class="row row-cols-1 row-cols-md-1">
             <div class="col" >
               <div class="card h-100" >
                  <img src="./assets/images/chatlaunch.gif" class="card-img-top"  alt="...">
               <div class="card-body">
                     <h5 class="card-title center">UPLOAD EMPLOYEE DETAILS</h5>
               <p class="card-text center">
           
<a  class="btn btn-primary kaiwabuttons"  href="./assets/files/template.csv" download>Download CSV Template</a>

               <div class="table-responsive" id="employee_table">  
                      
                </div>  




<!-- <div id="items" class="form-group" >
  <div class="input-group">
                                    <label class="label">Employees</label></label>      
                                        </div>
</div> -->



  



 <div class="ajax-loader" style="height:200px !important;">
 <h4 style="margin-left:30%">Sending mails out</h4>
  <img src="./assets/images/load.gif" height="200px"/>
</div>                                       
 


<form id="upload_csv" method="post" enctype="multipart/form-data">  
                     <div class="col-md-5">  
                          <br />  
                          <label>Note: Please upload HRIS in CSV format.</label>  
                     </div> 

                     <input type="text"class="project-id"  value="<?php echo $projectid;?> " name="projectid" style="display:none"/>  
                     <div class="col-md-4">  
                          <input type="file" name="employee_file" style="margin-top:15px;" />  
                     </div>  
                     <div class="col-md-5">  
                          <input type="submit"  class="btn btn-primary kaiwabuttons"name="upload" id="upload" value="Upload & Launch" style="margin-top:10px;" class="btn btn-info" />  
                     </div>  
                     <div style="clear:both"></div>  
                </form> 

               
           </div>  


           <span id="note"  style="margin-left: 20px; display:none;" >&nbsp;<b>Note:</b> Save the Project Id to access dashboard in the future.</span>


        </p>
      </div>
      <div class="card-footer center" >
      <form action="./beats-dashboard.php" method="post">
      <input style="display:none;" name="username" value="<?php echo $_SESSION['Username'];?>" >
      <input type="text" class="project-id" value="<?php echo $projectid;?>" name="projectid" style="display:none;"/>
      <button type="submit" id="finish" class="btn btn-primary kaiwabuttons" disabled>Finish & Track</button>
      </form>

      </div>
       
    </div>
  </div>

</div>
  

</div>




















<script>
//clearing questions on click

$(".addquestion").on("click", function (e) {
       $("#textquestion").css("display","block");
        $("#textsuccess").css("display","none");
        $("#likertscaleform").css("display","block");
        $("#likertscalesuccess").css("display","none");
        $("#mcqform").css("display","block");
        $("#mcqsuccess").css("display","none");

        var form = document.getElementById("textquestion");
var inputs = form.getElementsByTagName("input")

for (i = 0; i < inputs.length; i++) {
    if(i != 0) {
        inputs[i].value = "";
    }
}

var form2 = document.getElementById("likertscaleform");
var inputs2 = form2.getElementsByTagName("input")

for (j = 0; j < inputs2.length; j++) {
    if(j != 0) {
        inputs2[j].value = "";
    }
}

var form3 = document.getElementById("mcqform");
var inputs3 = form3.getElementsByTagName("input")

for (k = 0; k < inputs3.length; k++) {
    if(k != 0) {
        inputs3[k].value = "";
    }
}



});











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
        $("#project-section").css("display","none");
        $("#create-questions").css("display","block");
        $(".project-id").val(data);
        
              }
    });
 
    e.preventDefault();
});


$("#questionsform").on("submit", function (e) {
    
        // $("#result").text(" project created");
        $("#create-questions").css("display","none");
        $("#add-questions").css("display","block");
      
        
        
 
    e.preventDefault();
});



$("#foo_form").on("submit", function (e) {
 
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
     $("#add-questions").css("display","none");
     $("#add-employees").css("display","block");
    
    
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
        $("#textsuccess").css("display","block");
       
      
      
              }
    });
    e.preventDefault();
    
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
        
        $("#likertscaleform").css("display","none");
        $("#likertscalesuccess").css("display","block");
       
      
      
              }
    });
    e.preventDefault();
   
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
        
       
        $("#mcqform").css("display","none");
        $("#mcqsuccess").css("display","block");
      
      
              }
    });
 
    e.preventDefault();
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
                               $('#upload_csv').css("display","none");
                               $('#note').css("display","block");
                               $('#finish').prop('disabled', false);
                          }  
                     } ,
                     complete: function(){
    $('.ajax-loader').css("visibility", "hidden");
  } 
                }) 
                
                 
           }); 






</script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
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










