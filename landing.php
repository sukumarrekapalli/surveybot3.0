
<?php

include 'config.php';
if (!isset($_SESSION)){
  session_start();
//echo $_SESSION['Username'];
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

    <style>

.landing {
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.center{
    text-align:center;
}

.kaiwabuttons{
    background-color: #329FD9;
}
    
    </style>


  </head>
  <body>
  
  <div class="landing">
  <h1 class="center">Welcome!</h1>
  <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="./assets/images/chatlaunch.gif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Launch Kaiwa</h5>
        <p class="card-text">Know more about your employees with the help of Kaiwa.</p>
      </div>
      <div class="card-footer center" >
      <a href="./kaiwa-launch-initiate.php" class="btn btn-primary kaiwabuttons" >Launch now</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="./assets/images/scan.gif"  class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Track Kaiwa Results</h5>
        <p class="card-text">Have a look at the results of your previous projects</p>
      </div>
      <div class="card-footer center" >
      <form method="post" action="./beats-dashboard.php" >
      <input style="display:none;" name="username" value="<?php echo $_SESSION['Username']; ?>">
      <input type="text" name="projectid" placeholder="Enter Project Id" />
      <button type="submit" class="btn btn-primary kaiwabuttons" >Track</button>
      </form>
      </div>
    </div>
  </div>
</div>
  
</div>
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










