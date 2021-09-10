<?php

include 'config.php';
if (!isset($_SESSION)){
  session_start();
 // echo $_SESSION['Username'];
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <!--jquery-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.js"></script>

  <style>
    .landing {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .center {
      text-align: center;

    }

    .kaiwabuttons {
      background-color: #329FD9;
      margin: 10px 10px;
    }

    html {
      box-sizing: border-box;
    }

    *,
    *::after,
    *::before {
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

    .screen-reader-text:hover,
    .screen-reader-text:active,
    .screen-reader-text:focus {
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


    .tabme {
      height: 58px;
      width: 100%;
      background: #155e8f;
      color: white;
      border-radius: 2px;
    }










    nav {
      /*background-color: #3494a3;
     /*background-image: linear-gradient(to bottom right, #185a9d, #43cea2);*/
      background-color: #a405a0;
    }

    .content {

      height: 100%;
    }

    .sidenav {
      /*background-color: #3494a3;*/
      background-image: linear-gradient(to bottom right, #fd576b, #a405a0);
    }

    /*.card-bg{
    background: rgba(0,0,0,0);
  }*/
    @media only screen and (max-width: 992px) {

      .content,
      nav {
        padding-left: 0;
      }
    }




    .a {
      padding: 1px;
      color: white;

    }

    @media (max-width: 36em) {
      .radar {
        height: 100px;
        /* Overrides the above styles on screens larger than 36em */
      }
    }

    .rating {
      color: black;
      font-weight: 25px;
      font-size: 25px;
    }

    .num {
      background-color: #ffffff00;
      font-style: italic;
      color: orange;
      font-weight: 25px;
      font-size: 18px;
    }


    .tab2,
    .tab3,
    .tab4,
    .tab5 {
      z-index: -1;
      font-size: 12px !important;


    }

    .fixfixforfloat {
      z-index: -1;
    }

    .heatmap {
      margin-left: 50px;
      padding-top: -20px;
    }

    @media only screen and (max-width: 600px) {
      .mob {
        padding-top: 120px;
      }
    }

    @media only screen and (max-width: 900px) {
      .heatmap {
        margin-top: -100px;

      }
    }

    @media only screen and (max-width: 800px) {
      .heatmap1 {
        text-align: center;

      }
    }

    .floatbtn {
      z-index: 1;
    }

    .modal {
      border-radius: 0px !important;
      padding: 30px;

    }



    .ajax-loader {
      visibility: hidden;
      background-color: rgba(255, 255, 255, 0.7);
      position: absolute;
      z-index: +100 !important;
      width: 100%;
      height: 100%;
    }

    .ajax-loader img {

      position: absolute;
      z-index: +100 !important;
      width: auto;
      height: 100%;
    }
  </style>


</head>

<body>

  <div class="landing" id="project-section">
    <h3 class="center">Give your project a great name!</h3>
    <div class="row row-cols-1 row-cols-md-1">
      <div class="col">
        <div class="card h-100">
          <img src="./assets/images/chatlaunch.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title center">PROJECT DETAILS</h5>
            <p class="card-text">
            
              <form id="projectform" action="">
             <input style="display:none;" name="username" value="<?php echo $_SESSION['Username'];?>" >
             <div class="row">
                <div class="mb-3 col-lg-6">
                  <label for="exampleFormControlInput1" class="form-label">Project Name</label>
                  <input type="text" name="projectname" class="form-control" required>
                </div>
                <div class="mb-3 col-lg-6">
                  <label for="exampleFormControlInput1" class="form-label">Company Name</label>
                  <input type="text" name="orgname" class="form-control" required>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-lg-6">
                  <label for="exampleFormControlInput1" class="form-label">From Date</label>
                  <input type="date" name="fromdate" min="<?php echo date('Y-m-d'); ?>" class="form-control" required>
                </div>
                <div class="mb-3 col-lg-6">
                  <label for="exampleFormControlInput1" class="form-label">To Date</label>
                  <input type="date" name="todate" min="<?php echo date('Y-m-d'); ?>" class="form-control" required>
                </div>
              </div>
            </p>
          </div>
          <div class="card-footer center">
            <button type="submit" class="btn btn-primary kaiwabuttons">Confirm and Next</button>
          </div>
          </form>
        </div>
      </div>

    </div>

  </div>


  <div class="landing" id="template" style="display: none;">
    <h3 class="center">Do you want to use a template</h3>
    <div class="row row-cols-1 row-cols-md-1">
      <div class="col">
        <div class="card h-100">
          <img src="./assets/images/chatlaunch.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title center"></h5>
    
            <p class="card-text">
            <div class="row g-0" style="margin-top:10px">
    <div class="col-md-4">
      <img src="./assets/images/oltj.png" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h6 class="card-title">OLTJ TEMPLATE</h6>
        <p class="card-text"><button class="btn btn-primary kaiwabuttons " id="OLTJ" type="button">Use Template</button></p>
        
      </div>
    </div>
  </div>

  <div class="row g-0"  style="margin-top:10px">
    <div class="col-md-4">
      <img src="./assets/images/wellbeing.png" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h6 class="card-title">WELL BEING TEMPLATE</h6>
        <p class="card-text">
  <button class="btn btn-primary kaiwabuttons " id="WB" type="button">Use Template</button></p>
        
      </div>
    </div>
  </div>

  <div class="row g-0"  style="margin-top:10px">
    <div class="col-md-4">
      <img src="./assets/images/custom.png" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h6 class="card-title">CUSTOM</h6>
        <p class="card-text"><button class="btn btn-primary kaiwabuttons" id="custom" type="button">Create</button></p>
        
      </div>
    </div>
  </div>
            </p>
          </div>
          <div class="card-footer center">
            
          </div>
          </form>
        </div>
      </div>

    </div>

  </div>




<!--oltj section-->
<div class="landing" id="OLTJ-section" style="display: none;">


<h3 class="center">What questions would you like to add!</h3>
<div class="row row-cols-1 row-cols-md-1">
  <div class="col">
    <div class="card h-80">
      <img src="./assets/images/chatlaunch.gif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title center">ABOUT OLTJ</h5>
        <p class="card-text center">


         
          <input type="text" name="project-id" class="form-control project-id" style="display:none;">
              <div style="text-align: center;margin:5px;">
              <p>Depending on the structure of an organization, team leaders may play a role in managing a certain group, subgroup or project. The way they perform their duties can have a substantial impact on the productivity and success of their team.</p>
                <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#textquestionmodal-OLTJ">
                  + Add Open Space Question
                </button>
                <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#likertscalequestionmodal-OLTJ">
                  + Add Likert Scale Question
                </button>
                <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#mcqquestionmodal-OLTJ">
                  + Add MCQ Question
                </button>

              </div>

        </p>
      </div>
      <div class="card-footer center">
        <form action="./kaiwa-launch-finish.php" method="post">
        <input type="text" name="OLTJ" class="form-control"  style="display:none;">
          <input type="text" name="projectid" class="project-id" style="display:none;">
          <button type="submit" class="btn btn-primary kaiwabuttons">Launch from template</button>
        </form>
      </div>

    </div>
  </div>

</div>


</div>





<!--WB section-->
<div class="landing" id="WB-section" style="display: none;">


<h3 class="center">What questions would you like to add!</h3>
<div class="row row-cols-1 row-cols-md-1">
  <div class="col">
    <div class="card h-80">
      <img src="./assets/images/chatlaunch.gif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title center">ABOUT WELLBEING</h5>
        <p class="card-text center">


         
          <input type="text" name="project-id" class="form-control project-id" style="display:none;">
              <div style="text-align: center;margin:5px;">
              <p>Well-being, also known as wellness, prudential value or quality of life, refers to what is intrinsically valuable relative to someone. So the well-being of a person is what is ultimately good for this person, what is in the self-interest of this person. Well-being can refer to both positive and negative well-being.</p>
                <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#textquestionmodal-WB">
                  + Add Open Space Question
                </button>
                <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#likertscalequestionmodal-WB">
                  + Add Likert Scale Question
                </button>
                <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#mcqquestionmodal-WB">
                  + Add MCQ Question
                </button>

              </div>

        </p>
      </div>
      <div class="card-footer center">
        <form action="./kaiwa-launch-finish.php" method="post">
        <input type="text" name="WB" class="form-control"  style="display:none;">
          <input type="text" name="projectid" class="project-id" style="display:none;">
          <button type="submit" class="btn btn-primary kaiwabuttons">Launch from template</button>
        </form>
      </div>

    </div>
  </div>

</div>


</div>







  <!---create questions-->
  <div class="landing" id="create-questions" style="display: none;">


    <h3 class="center">What questions would you like to add!</h3>
    <div class="row row-cols-1 row-cols-md-1">
      <div class="col">
        <div class="card h-100">
          <img src="./assets/images/chatlaunch.gif" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title center">CREATE QUESTIONS FOR YOUR PROJECT</h5>
            <p class="card-text center">


              <input type="text" name="project-id" class="form-control project-id" style="display:none;">
              <div style="text-align: center;margin:5px;">
                <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#textquestionmodal">
                  + Add Open Space Question
                </button>
                <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#likertscalequestionmodal">
                  + Add Likert Scale Question
                </button>
                <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#mcqquestionmodal">
                  + Add MCQ Question
                </button>
                <button type="button" class="btn btn-primary kaiwabuttons addquestion" data-bs-toggle="modal"
                  data-bs-target="#mcqMquestionmodal">
                  + Add MCQ(Multi-select) Question
                </button>

              </div>

            </p>
          </div>
          <div class="card-footer center">
            <form action="./kaiwa-launch-finish.php" method="post">
              <input type="text" name="projectid" class="project-id" style="display:none;">
              <button type="submit" class="btn btn-primary kaiwabuttons">Confirm and Next</button>
            </form>
          </div>

        </div>
      </div>

    </div>


  </div>


  
 

  




  <!-----modals --->

  <!-- Modal -->
  <div class="modal fade" id="textquestionmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Text question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="textquestion" class="questionforms">
            <input type="text" name="projectid" class="form-control project-id" style="display: none;">
            <input type="text" id="question" class="form-control" placeholder="Enter your question" name="textquestion"
              required />
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <p id="textsuccess" class="center success" style="display :none;">
            <img src="./assets/images/success.gif" height="200px" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="textquestionmodal-OLTJ" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Text question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="textquestion-OLTJ" class="questionforms">
            <input type="text" name="projectid" class="form-control" value="0" style="display: none;">
            <input type="text" id="question" class="form-control" placeholder="Enter your question" name="textquestion"
              required />
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <p id="textsuccess-OLTJ" class="center success" style="display :none;">
            <img src="./assets/images/success.gif" height="200px" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="textquestionmodal-WB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Text question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="textquestion-WB" class="questionforms">
            <input type="text" name="projectid" class="form-control" value="-1" style="display: none;">
            <input type="text" id="question" class="form-control" placeholder="Enter your question" name="textquestion"
              required />
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <p id="textsuccess-WB" class="center success" style="display :none;">
            <img src="./assets/images/success.gif" height="200px" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <!--likertsaclequestion-->

  <div class="modal fade" id="likertscalequestionmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Likertscale question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="likertscaleform" class="questionforms">
            <input type="text" name="projectid" class="form-control project-id" style="display:none;">




            <input type="text" id="question" class="form-control" placeholder="Enter your question" name="textquestion"
              required />

            <input type="text" id="r1" class="form-control" name="r1"
              placeholder="Enter chatbot response for Strongly Agree" />

            <input type="text" id="r2" class="form-control" name="r2" placeholder="Enter chatbot response for Agree" />

            <input type="text" id="r3" class="form-control" name="r3"
              placeholder="Enter chatbot response for Neither Agree nor Disagree" />
            <input type="text" id="r4" class="form-control" name="r4"
              placeholder="Enter chatbot response for Disagree" />
            <input type="text" id="r5" class="form-control" name="r5"
              placeholder="Enter chatbot response for Stongly Disagree" />

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <p id="likertscalesuccess" class="center success" style="display :none;">
            <img src="./assets/images/success.gif" height="200px" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="likertscalequestionmodal-OLTJ" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Likertscale question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="likertscaleform-OLTJ" class="questionforms">
            <input type="text" name="projectid" class="form-control" value="0" style="display:none;">




            <input type="text" id="question" class="form-control" placeholder="Enter your question" name="textquestion"
              required />

            <input type="text" id="r1" class="form-control" name="r1"
              placeholder="Enter chatbot response for Strongly Agree" />

            <input type="text" id="r2" class="form-control" name="r2" placeholder="Enter chatbot response for Agree" />

            <input type="text" id="r3" class="form-control" name="r3"
              placeholder="Enter chatbot response for Neither Agree nor Disagree" />
            <input type="text" id="r4" class="form-control" name="r4"
              placeholder="Enter chatbot response for Disagree" />
            <input type="text" id="r5" class="form-control" name="r5"
              placeholder="Enter chatbot response for Stongly Disagree" />

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <p id="likertscalesuccess-OLTJ" class="center success" style="display :none;">
            <img src="./assets/images/success.gif" height="200px" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="likertscalequestionmodal-WB" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Likertscale question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="likertscaleform-WB" class="questionforms">
            <input type="text" name="projectid" class="form-control" value="-1" style="display:none;">




            <input type="text" id="question" class="form-control" placeholder="Enter your question" name="textquestion"
              required />

            <input type="text" id="r1" class="form-control" name="r1"
              placeholder="Enter chatbot response for Strongly Agree" />

            <input type="text" id="r2" class="form-control" name="r2" placeholder="Enter chatbot response for Agree" />

            <input type="text" id="r3" class="form-control" name="r3"
              placeholder="Enter chatbot response for Neither Agree nor Disagree" />
            <input type="text" id="r4" class="form-control" name="r4"
              placeholder="Enter chatbot response for Disagree" />
            <input type="text" id="r5" class="form-control" name="r5"
              placeholder="Enter chatbot response for Stongly Disagree" />

            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <p id="likertscalesuccess-WB" class="center success" style="display :none;">
            <img src="./assets/images/success.gif" height="200px" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


  <!--mcqquestionmodal-->


  <div class="modal fade" id="mcqquestionmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add MCQ question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="mcqform" class="questionforms">
            <input type="text" name="projectid" class="form-control project-id" style="display:none;">

            <input type="text" id="question" class="form-control" placeholder="Enter your question"
              name="textquestion" />

            <div id="item" class="form-group">
              <br>
              <div class="next-referral ">
                <input id="textinput" type="text" placeholder="Enter option"
                  class="form-control input-md input--style-4" name="options[]" required>
              </div>
              <br>
              <div class="next-referral ">
                <input id="textinput" type="text" placeholder="Enter response for options"
                  class="form-control input-md input--style-4" name="responses[]" required>
              </div>
              <br>
              <br>
            </div>

            </fieldset>


            <button style="background-color:  #7bbff0;font-size:14px;height:35px; width: 130px; color:white;"
              id="addoption" class=" " type="button">+ Add options</button> <button
              style="background-color: red;font-size:14px;height:35px; width: 130px; color:white;" class="delete ">-
              Remove</button>
            <br>
            <script>
              $(document).ready(function () {
                $(".delete").hide();
                //when the Add Field button is clicked
                $("#addoption").click(function (e) {
                  $(".delete").fadeIn("1500");
                  //Append a new row of code to the "#items" div
                  $("#item").append(
                    '<div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter option" class="form-control input-md input--style-4"  name="options[]" required></div><br><div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter response for options" class="form-control input-md input--style-4"  name="responses[]" required></div><br><br>'
                  );
                });
                $("body").on("click", ".delete", function (e) {
                  $(".next-referral").last().remove();
                });
              });
            </script>





            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <p id="mcqsuccess" class="center success" style="display :none;">
            <img src="./assets/images/success.gif" height="200px" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="mcqMquestionmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add MCQ(multiple select) question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="mcqMform" class="questionforms">
            <input type="text" name="projectid" class="form-control project-id" style="display:none;">

            <input type="text" id="question" class="form-control" placeholder="Enter your question"
              name="textquestion" />

            <div id="item-mcqM" class="form-group">
              <br>

              <div class="next-referral ">
                <input id="textinput" type="text" placeholder="Enter common response"
                  class="form-control input-md input--style-4" name="responses[]" required>
              </div><br><br>
              <div class="next-referral ">
             
                <input id="textinput" type="text" placeholder="Enter option"
                  class="form-control input-md input--style-4" name="options[]" required>
              </div>
              
              <br>
              <br>
            </div>

            </fieldset>


            <button style="background-color:  #7bbff0;font-size:14px;height:35px; width: 130px; color:white;"
              id="addoption-mcqM" class=" " type="button">+ Add options</button> <button
              style="background-color: red;font-size:14px;height:35px; width: 130px; color:white;" class="delete ">-
              Remove</button>
            <br>
            <script>
              $(document).ready(function () {
                $(".delete").hide();
                //when the Add Field button is clicked
                $("#addoption-mcqM").click(function (e) {
                  $(".delete").fadeIn("1500");
                  //Append a new row of code to the "#items" div
                  $("#item-mcqM").append(
                    '<div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter option" class="form-control input-md input--style-4"  name="options[]" required></div><br>'
                  );
                });
                $("body").on("click", ".delete", function (e) {
                  $(".next-referral").last().remove();
                });
              });
            </script>





            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <p id="mcqMsuccess" class="center success" style="display :none;">
            <img src="./assets/images/success.gif" height="200px" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="mcqquestionmodal-OLTJ" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add MCQ question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="mcqform-OLTJ" class="questionforms">
            <input type="text" name="projectid" class="form-control" value="0" style="display:none;">

            <input type="text" id="question" class="form-control" placeholder="Enter your question"
              name="textquestion" />

            <div id="item-OLTJ" class="form-group">
              <br>
              <div class="next-referral ">
                <input id="textinput" type="text" placeholder="Enter option"
                  class="form-control input-md input--style-4" name="options[]" required>
              </div>
              <br>
              <div class="next-referral ">
                <input id="textinput" type="text" placeholder="Enter response for options"
                  class="form-control input-md input--style-4" name="responses[]" required>
              </div>
              <br>
              <br>
            </div>

            </fieldset>


            <button style="background-color:  #7bbff0;font-size:14px;height:35px; width: 130px; color:white;"
              id="addoption-OLTJ" class=" " type="button">+ Add options</button> <button
              style="background-color: red;font-size:14px;height:35px; width: 130px; color:white;" class="delete ">-
              Remove</button>
            <br>
            <script>
              $(document).ready(function () {
                $(".delete").hide();
                //when the Add Field button is clicked
                $("#addoption-OLTJ").click(function (e) {
                  $(".delete").fadeIn("1500");
                  //Append a new row of code to the "#items" div
                  $("#item-OLTJ").append(
                    '<div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter option" class="form-control input-md input--style-4"  name="options[]" required></div><br><div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter response for options" class="form-control input-md input--style-4"  name="responses[]" required></div><br><br>'
                  );
                });
                $("body").on("click", ".delete", function (e) {
                  $(".next-referral").last().remove();
                });
              });
            </script>





            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <p id="mcqsuccess-OLTJ" class="center success" style="display :none;">
            <img src="./assets/images/success.gif" height="200px" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="mcqquestionmodal-WB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add MCQ question</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="mcqform-WB" class="questionforms">
            <input type="text" name="projectid" class="form-control" value="-1" style="display:none;">

            <input type="text" id="question" class="form-control" placeholder="Enter your question"
              name="textquestion" />

            <div id="item-WB" class="form-group">
              <br>
              <div class="next-referral ">
                <input id="textinput" type="text" placeholder="Enter option"
                  class="form-control input-md input--style-4" name="options[]" required>
              </div>
              <br>
              <div class="next-referral ">
                <input id="textinput" type="text" placeholder="Enter response for options"
                  class="form-control input-md input--style-4" name="responses[]" required>
              </div>
              <br>
              <br>
            </div>

            </fieldset>


            <button style="background-color:  #7bbff0;font-size:14px;height:35px; width: 130px; color:white;"
              id="addoption-WB" class=" " type="button">+ Add options</button> <button
              style="background-color: red;font-size:14px;height:35px; width: 130px; color:white;" class="delete ">-
              Remove</button>
            <br>
            <script>
              $(document).ready(function () {
                $(".delete").hide();
                //when the Add Field button is clicked
                $("#addoption-WB").click(function (e) {
                  $(".delete").fadeIn("1500");
                  //Append a new row of code to the "#items" div
                  $("#item-WB").append(
                    '<div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter option" class="form-control input-md input--style-4"  name="options[]" required></div><br><div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter response for options" class="form-control input-md input--style-4"  name="responses[]" required></div><br><br>'
                  );
                });
                $("body").on("click", ".delete", function (e) {
                  $(".next-referral").last().remove();
                });
              });
            </script>





            <button type="submit" class="btn btn-primary">Save</button>
          </form>
          <p id="mcqsuccess-WB" class="center success" style="display :none;">
            <img src="./assets/images/success.gif" height="200px" />
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>




















  <script>




  //OLTJ AND CUSTOM SPLIT
  $("#OLTJ").on("click", function (e) {
    $("#template").css("display", "none");
    $("#OLTJ-section").css("display", "block");
  });

  $("#WB").on("click", function (e) {
    $("#template").css("display", "none");
    $("#WB-section").css("display", "block");
  });


  $("#custom").on("click", function (e) {
    $("#template").css("display", "none");
    $("#create-questions").css("display", "block");
  });
  
    //clearing questions on click

    $(".addquestion").on("click", function (e) {
      


      $('.success').css("display", "none")
      $(".questionforms").css("display","block");


      
      var form = document.getElementById("textquestion");
      var inputs = form.getElementsByTagName("input")

      for (i = 0; i < inputs.length; i++) {
        if (i != 0) {
          inputs[i].value = "";
        }
      }

      var formx = document.getElementById("textquestion-OLTJ");
      var inputsx = formx.getElementsByTagName("input")

      for (x = 0; x < inputsx.length; x++) {
        if (x != 0) {
          inputsx[x].value = "";
        }
      }


      var forml = document.getElementById("textquestion-WB");
      var inputsl = forml.getElementsByTagName("input")

      for (l = 0; l < inputsl.length; l++) {
        if (l != 0) {
          inputsl[l].value = "";
        }
      }


      var form2 = document.getElementById("likertscaleform");
      var inputs2 = form2.getElementsByTagName("input")

      for (j = 0; j < inputs2.length; j++) {
        if (j != 0) {
          inputs2[j].value = "";
        }
      }

      var formm = document.getElementById("likertscaleform-OLTJ");
      var inputsm = formm.getElementsByTagName("input")

      for (m = 0; m < inputsm.length; m++) {
        if (m != 0) {
          inputsm[m].value = "";
        }
      }



      var formy = document.getElementById("likertscaleform-WB");
      var inputsy = formy.getElementsByTagName("input")

      for (y = 0; y < inputsy.length; y++) {
        if (y != 0) {
          inputsy[y].value = "";
        }
      }

      var form3 = document.getElementById("mcqform");
      var inputs3 = form3.getElementsByTagName("input")

      for (k = 0; k < inputs3.length; k++) {
        if (k != 0) {
          inputs3[k].value = "";
        }
      }
      
      var formMCQM = document.getElementById("mcqMform");
      var inputsMCQM = formMCQM.getElementsByTagName("input")

      for (k = 0; k < inputsMCQM.length; k++) {
        if (k != 0) {
          inputsMCQM[k].value = "";
        }
      }


      $("#item-mcqM").replaceWith(
                    '<div id="item-mcqM" class="form-group"><div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter default response" class="form-control input-md input--style-4"  name="responses[]" required></div><br><br><div class="next-referral "><input  id="textinput"  type="text" placeholder="Enter option" class="form-control input-md input--style-4"  name="options[]" required></div><br></div>'
                  );


                  $("#item").replaceWith(' <div id="item" class="form-group"><br><div class="next-referral "><input id="textinput" type="text" placeholder="Enter option" class="form-control input-md input--style-4" name="options[]" required></div><br><div class="next-referral "><input id="textinput" type="text" placeholder="Enter response for options" class="form-control input-md input--style-4" name="responses[]" required></div><br>');
                  
                  $("#item-WB").replaceWith(' <div id="item-WB" class="form-group"><br><div class="next-referral "><input id="textinput" type="text" placeholder="Enter option" class="form-control input-md input--style-4" name="options[]" required></div><br><div class="next-referral "><input id="textinput" type="text" placeholder="Enter response for options" class="form-control input-md input--style-4" name="responses[]" required></div><br>');
                  
                  $("#item-OTLJ").replaceWith(' <div id="item-OTLJ" class="form-group"><br><div class="next-referral "><input id="textinput" type="text" placeholder="Enter option" class="form-control input-md input--style-4" name="options[]" required></div><br><div class="next-referral "><input id="textinput" type="text" placeholder="Enter response for options" class="form-control input-md input--style-4" name="responses[]" required></div><br>');
                  
               
      

      var formz = document.getElementById("mcqform-OLTJ");
      var inputsz = formz.getElementsByTagName("input")

      for (z = 0; z < inputsz.length; z++) {
        if (z != 0) {
          inputsz[z].value = "";
        }
      }

      var formn = document.getElementById("mcqform-WB");
      var inputsn = formn.getElementsByTagName("input")

      for (n = 0; n < inputsn.length; n++) {
        if (n != 0) {
          inputsn[n].value = "";
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
          $("#project-section").css("display", "none");
          $("#template").css("display", "block");
          $(".project-id").val(data);

        }
      });

      e.preventDefault();
    });


    $("#questionsform").on("submit", function (e) {

      // $("#result").text(" project created");




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

          $("#textquestion").css("display", "none");
          $("#textsuccess").css("display", "block");



        }
      });
      e.preventDefault();

    });


    $("#textquestion-OLTJ").on("submit", function (e) {
      var dataString = $(this).serialize();

      $.ajax({
        type: "POST",
        url: "./add_textquestion.php",
        data: dataString,
        success: function (data) {
          // Display message back to the user here
          console.log(data);

          $("#textquestion-OLTJ").css("display", "none");
          $("#textsuccess-OLTJ").css("display", "block");



        }
      });
      e.preventDefault();

    });

    $("#textquestion-WB").on("submit", function (e) {
      var dataString = $(this).serialize();

      $.ajax({
        type: "POST",
        url: "./add_textquestion.php",
        data: dataString,
        success: function (data) {
          // Display message back to the user here
          console.log(data);

          $("#textquestion-WB").css("display", "none");
          $("#textsuccess-WB").css("display", "block");



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

          $("#likertscaleform").css("display", "none");
          $("#likertscalesuccess").css("display", "block");



        }
      });
      e.preventDefault();

    });


    $("#likertscaleform-OLTJ").on("submit", function (e) {
      var dataString = $(this).serialize();

      $.ajax({
        type: "POST",
        url: "./add_likertscale.php",
        data: dataString,
        success: function (data) {
          // Display message back to the user here
          console.log(data);

          $("#likertscaleform-OLTJ").css("display", "none");
          $("#likertscalesuccess-OLTJ").css("display", "block");



        }
      });
      e.preventDefault();

    });

    
    $("#likertscaleform-WB").on("submit", function (e) {
      var dataString = $(this).serialize();

      $.ajax({
        type: "POST",
        url: "./add_likertscale.php",
        data: dataString,
        success: function (data) {
          // Display message back to the user here
          console.log(data);

          $("#likertscaleform-WB").css("display", "none");
          $("#likertscalesuccess-WB").css("display", "block");



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


          $("#mcqform").css("display", "none");
          $("#mcqsuccess").css("display", "block");


        }
      });

      e.preventDefault();
    });


    $("#mcqMform").on("submit", function (e) {
      var dataString = $(this).serialize();

      $.ajax({
        type: "POST",
        url: "./add_mcqMquestion.php",
        data: dataString,
        success: function (data) {
          // Display message back to the user here
          console.log(data);


          $("#mcqMform").css("display", "none");
          $("#mcqMsuccess").css("display", "block");


        }
      });

      e.preventDefault();
    });
    $("#mcqform-OLTJ").on("submit", function (e) {
      var dataString = $(this).serialize();

      $.ajax({
        type: "POST",
        url: "./add_mcqquestion.php",
        data: dataString,
        success: function (data) {
          // Display message back to the user here
          console.log(data);


          $("#mcqform-OLTJ").css("display", "none");
          $("#mcqsuccess-OLTJ").css("display", "block");


        }
      });

      e.preventDefault();
    });

    $("#mcqform-WB").on("submit", function (e) {
      var dataString = $(this).serialize();

      $.ajax({
        type: "POST",
        url: "./add_mcqquestion.php",
        data: dataString,
        success: function (data) {
          // Display message back to the user here
          console.log(data);


          $("#mcqform-WB").css("display", "none");
          $("#mcqsuccess-WB").css("display", "block");


        }
      });

      e.preventDefault();
    });



  


  
  </script>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>

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