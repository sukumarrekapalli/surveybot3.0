<?php
include 'config.php';
if(isset($_POST['projectid'])){
    $projectid= $_POST['projectid'];
    $query= "select * from survey_table where Project_id = ".$projectid.";";
$result=mysqli_query($dbconnect,$query);

$query2= "select question_list from projects_table where id = ".$projectid.";";
$result2=mysqli_query($dbconnect,$query2);

$query3= "select * from response_table where Project_id = ".$projectid.";";
$result3=mysqli_query($dbconnect,$query3);



$questionlist= mysqli_fetch_row($result2);





$questions_arr = explode(',',$questionlist[0]);

"Total no of questions<b>".sizeof($questions_arr)."</b><br><br>";

$num_rows = mysqli_num_rows($result);

$num_answers = mysqli_num_rows($result3);



$num_questions = sizeof($questions_arr);
$num_of_responses = $num_answers/$num_questions;
// while($row = mysqli_fetch_array($result))
// {
//   echo $row['Employee_name']." with code:". $row['Survey_link']."<br>";
// }

"Total No of participants:<b>".$num_rows."</b><br><br>";
 "Total No of Responses:<b>".$num_of_responses."</b><br><br>";

 "<b>Responses so far :</b><br><br>";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/281a5a8b8a.js" crossorigin="anonymous"></script>
  </head>

  <style>
 .kaiwabuttons{
    background-color: #329FD9;
}


.landing {
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
  </style>

  <body>
 

  <div class="modal fade" id="mcqquestionmodal-WB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Response percentage</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <canvas id="responsechart" width="200" height="100"></canvas>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="visualizelikert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">likerscale visualization</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


<div class="card landing" style="width: 80vw;margin-top:220px">
  <img src="./assets/images/chatlaunch.gif" height="300px" alt="...">
  <div class="card-body">

  <div class="container" style="margin-top:20px;">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col card">
    <button type="button " class="btn btn-primary kaiwabuttons">
    <i class="fas fa-user"></i>  Number of Participants &nbsp;<br> <span class="badge bg-secondary"><?php echo $num_rows;?></span>
  <span class="visually-hidden">unread messages</span>
</button>
    </div>
    <div class="col card">
    <button type="button" class="btn btn-primary kaiwabuttons">
    <i class="fas fa-clipboard"></i> Number of Responses&nbsp;<br><span class="badge bg-secondary"><?php echo $num_of_responses?></span>
  <span class="visually-hidden">unread messages</span>
</button>
    </div>
    <div class="col card">
    <button type="button" class="btn btn-primary kaiwabuttons">
    <i class="fas fa-question"></i> Number of Questions&nbsp;<br> <span class="badge bg-secondary"><?php echo $num_questions;?></span>
  <span class="visually-hidden">unread messages</span>
</button>
    </div>
    <div class="col card">
    <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#mcqquestionmodal-WB">
    <i class="fas fa-percentage"></i> Responses&nbsp;<br><span class="badge bg-secondary"><?php echo ($num_of_responses/$num_rows)*100;?>%</span>
  <span class="visually-hidden">unread messages</span>
</button>
    </div>
  </div>
</div>




  <!--div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       Participant list
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    
    <php
   /* echo ' <table class="table table-bordered">  
    <tr>  
         
         <th width="25%">projectid</th>  
         <th width="35%">employeename</th>  
         <th width="10%">link</th>  
         <th width="20%">mail</th>  
        
    </tr> ';  */
     while($row = mysqli_fetch_array($result))
            {

              echo '<p>'.$row['Employee_name'].'&nbsp;</p>';

            /*  echo ' <tr>  
                         
              <td>'.$row["Project_id"].'</td>  
              <td>'.$row["Employee_name"].'</td>  
              <td>'."<a href =".'"'.$baseurl.$row["Survey_link"].'" target ='.'"'."_blank".'">click here to test survey  </a>'.'</td>  
              <td>'.$row["Employee_mail"].'</td>  
             
         </tr>  ';*/
             }
?>
      </div>
    </div>
  </div-->


  <br>
  <div style="margin: 40px 40px">
  <h3 style="text-align:center">Responses</h3>
      <form method="POST">
    <?php  $p_id = $_POST['projectid']; ?>
      <input type="hidden" name="projectid" value="<?php echo $p_id; ?>" />

      <select class="form-select" aria-label="Default select example" name="ques" onchange="this.form.submit()"  >
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
      echo '<option onclick="myFunction()" value="'.$q.'">'. $questiontext[0].'&nbsp;<b>['.$questiontypeofq[0].']</b></option>';
    }
      
     }
     
     ?>
      <option value="any" > Select Question / view all Answers</option>
      <?php

      

for($i=0;$i<$num_questions;$i++)
{
  echo $questions_arr[$i];
  // echo '<option onclick="myFunction()" value="'.$row3['Questions'].'">"'.$questions_arr[$i] .'"</option>';

  $query4= "select question_text from questions_table where Id = ".$questions_arr[$i].";";
  $queryquestiontype2= "select question_type from questions_table where Id = ".$questions_arr[$i].";";
  $resultquestiontype2 = mysqli_query($dbconnect,$queryquestiontype2);
  $questiontype2 = mysqli_fetch_row($resultquestiontype2);
  $result4 = mysqli_query($dbconnect,$query4);
  $questiontext = mysqli_fetch_row($result4);
 echo '<option onclick="myFunction()" value="'.$questions_arr[$i].'">'. $questiontext[0].'&nbsp;<b>['.$questiontype2[0].']</b></option>';

}


?>


</select>
</form>







     <!-- <?php while($row3 = mysqli_fetch_array($result2))
{

  $query4= "select question_text from questions_table where Id = ".$row3['id'].";";
   $result4 = mysqli_query($dbconnect,$query4);
   $questiontext = mysqli_fetch_row($result4);
  
   echo '<option onclick="myFunction()" value="'.$row3['Questions'].'">"'.$p_id.'"</option>';  
  echo '<option onclick="myFunction()" value="'.$row3['Questions'].'">"'. $questiontext[0].'"</option>';

 //  .$row3['Answers']."</b> by <b> ".$row3['Survey_link']."</b> for question<b> "
}?> -->









<!-- <p id="answer"> </p> -->
<?php
if(isset($_POST['ques']))
{

  
  
 $q = $_POST['ques'];

 if($q == 'any')
 {
 
  $sql = "select * from response_table where Project_id = ".$projectid.";";

 }
 else
 {
 
  $questiontypequery = "select * from questions_table where Id= ".$q.";";
  $sql = "select * from response_table where Project_id = ".$projectid." and questions = ".$q.";";
  $questiontyperesult = mysqli_query($dbconnect, $questiontypequery);
  $questiontype= $questiontyperesult->fetch_assoc();
 }
 $result = mysqli_query($dbconnect, $sql);
 

if (mysqli_num_rows($result) > 0) {
  // output data of each row 
if(isset($questiontype)){
    

    if($questiontype['question_type']=='likertscale')
    {

         $likertresult = array(0,0,0,0,0);
  
          echo "<canvas id=".'"'."responsechart2".'"'." width=".'"'."400".'"'." height=".'"'."100".'"'."></canvas><br>";
    }
      }
$sa=0;
$a=0;
$nad=0;
$d=0;
$sd=0;
$textanswers='';

echo '<table class='.'"'.'table'.'"'.'>
  <thead>
    <tr>
      <th scope='.'"'.'col'.'"'.'>#</th>
      <th scope='.'"'.'col'.'"'.'>Answers</th>
     
    </tr>
  </thead>
  <tbody>
  ';
  $l=0;
  $body="";
  while($row = mysqli_fetch_assoc($result)) {
    $l++;
    // echo "" . $row["Answers"]. "<br>";
    $body.= "
    <tr>
      <th scope=".'"'."row".'"'.">".$l."</th>
      <td>".$row["Answers"]."</td>
      
    </tr>
  ";

    if(isset($questiontype)){
    if($questiontype['question_type']=='open space'){

     
      $textanswers .= " ".$row["Answers"];
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

$body.="</tbody>
  </table>";

  echo $body;
}
 else {
  echo "No Responses Yet";
}

}


 ?>
<div>    

  </div>
</div>




<!-- <div class="progress">
  <div class="progress-bar" role="progressbar" style="width: <?php echo ($num_of_responses/$num_rows)*100;?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div> -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <wordcloud style="margin-left:30%"></wordcloud>
  </body>
  <script>
function fetchanswer() {
  document.getElementById('answer').innerHTML = "answer";
}



</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>

var ResponseCanvas = document.getElementById("responsechart");


Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;


var ResponseData = {
    labels: [
        "Answered",
        "Not Answered",
  
    ],
    datasets: [
        {
            data: [<?php echo $num_of_responses;?>, <?php echo $num_rows-$num_of_responses;?>],
            backgroundColor: [
                "#63FF84",
                "#990808",
                "#84FF63",
                "#8463FF",
                "#6384FF"
            ]
        }]
};





var pieChart = new Chart(ResponseCanvas, {
  type: 'pie',
  data: ResponseData
});



radarChart.options.legend.display = false;

</script>

<script>
var likertCanvas = document.getElementById("responsechart2");

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
            data: [<?php echo  $likertresult [0];?>, <?php echo  $likertresult[1];?>, <?php echo  $likertresult[2];?>, <?php echo  $likertresult[3];?>, <?php echo  $likertresult[4];?>],
            backgroundColor: [
                "#63FF84",
                "#990808",
                "#84FF63",
                "#8463FF",
                "#6384FF"
            ]
        }]
};
var radarChart = new Chart(likertCanvas, {
  type: 'pie',
  data: likertData
});
</script>

<script src="https://d3js.org/d3.v3.min.js"></script>
  <script src="https://rawgit.com/jasondavies/d3-cloud/master/build/d3.layout.cloud.js"></script>
  <script>

//Simple animated example of d3-cloud - https://github.com/jasondavies/d3-cloud
//Based on https://github.com/jasondavies/d3-cloud/blob/master/examples/simple.html

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
            d3.layout.cloud().size([500, 500])
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

//Create a new instance of the word cloud visualisation.
var myWordCloud = wordCloud('wordcloud');

//Start cycling through the demo data
showNewWords(myWordCloud);


</script>
</html>
  
<?php
  }

  


  ?>