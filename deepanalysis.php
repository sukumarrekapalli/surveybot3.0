<?php  
 
include 'config.php';
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['projectid'])){  
        $projectid= $_POST['projectid'];
        //echo $projectid;
  



      
           
//                $handle = fopen($_FILES['employee_file']['tmp_name'], "r");
//                $data = fgetcsv($handle);
            
//                while($data = fgetcsv($handle))
//                {
                   
                 
//             $employee = mysqli_real_escape_string($dbconnect, $data[0]);  
//             $employeemail = mysqli_real_escape_string($dbconnect, $data[1]);
//             $gender = mysqli_real_escape_string($dbconnect, $data[2]);
//             $tenure = mysqli_real_escape_string($dbconnect, $data[3]);
//             $department = mysqli_real_escape_string($dbconnect, $data[4]); 
//             $location = mysqli_real_escape_string($dbconnect, $data[5]);
//             $age = mysqli_real_escape_string($dbconnect, $data[6]);
//             $designation = mysqli_real_escape_string($dbconnect, $data[7]); 
           
                       
                   
//             $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
//             $link= ''; 
//             $n = 7;
//             for ($j = 0; $j < $n; $j++) { 
//                 $index = rand(0, strlen($characters) - 1); 
//                 $link .= $characters[$index]; 
//             }
//             $query = "  
//             INSERT INTO survey_table 
//                  (Project_id, Employee_name, Survey_link, Employee_mail, Gender, Tenure, Department, Location, Age, Designation)  
//                  VALUES ('$projectid', '$employee', '$link', '$employeemail', '$gender', '$tenure', '$department', '$location', '$age', '$designation')  
//             ";  
//             mysqli_query($dbconnect, $query);  





            $mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 465; // TLS only
$mail->SMTPSecure = 'ssl'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = 'pulse@culturelytics.in';
$mail->Password = 'Pulse15101994';
$mail->setFrom('pulse@culturelytics.in', 'culturelytics');
$mail->addAddress('suraj@mnagenome.com', 'culturelytics');
$mail->Subject = 'kaiwa mail';

$message = " Dear beats admin,<br>project id :".$projectid." is requesting for deeper analysis";
$mail->msgHTML($message);
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->send();
       
               
       
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
    .landing {
    position: absolute;
    float: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.bg{
background-image: url("./dashboard.jpg");

  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
  </head>
  <body class="">
  <!-- <div class="bg" height="500px"style="padding: 40px;">
</div> -->
<div class="landing card" style="padding: 40px;">
<!-- <img src="./wait.jpg" height="300px"/> -->
<p>Our experts have recieved your request. Kindly wait two working day to get access to the advanced dashboard.
For any clarifications please email <a href="mailto:suraj@mnagenome.com">suraj@mnagenome.com</a> or call us on +91 8079674391</p>
<b>Visit our website : <b> &nbsp;
<a href="https://www.culturelytics.ai/"><img src="./culturelytics.png" height="100px" width="90px"/></a><br><br>
<form method="POST" action="./beats-dashboard.php">
   <input type="hidden" name="projectid" value="<?php echo $projectid; ?>" />
<button type="submit" class="btn" style="Background-color :#DE3A7D; border-radius: 4px; color: white;"> < Go Back to Dashboard</button>
</form> 
</div>


         
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
     
           
          
<?php
}



     
 ?>  




