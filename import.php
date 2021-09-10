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
      }



      
           
               $handle = fopen($_FILES['employee_file']['tmp_name'], "r");
               $data = fgetcsv($handle);
            
               while($data = fgetcsv($handle))
               {
                   
                 
            $employee = mysqli_real_escape_string($dbconnect, $data[0]);  
            $employeemail = mysqli_real_escape_string($dbconnect, $data[1]);
            $businessunit = mysqli_real_escape_string($dbconnect, $data[2]); 
            $gender = mysqli_real_escape_string($dbconnect, $data[3]);
            $tenure = mysqli_real_escape_string($dbconnect, $data[4]);
            
            $location = mysqli_real_escape_string($dbconnect, $data[5]);
            $age = mysqli_real_escape_string($dbconnect, $data[6]);
            $department= mysqli_real_escape_string($dbconnect, $data[7]);
            $designation = mysqli_real_escape_string($dbconnect, $data[8]); 
           
                       
                   
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
            $link= ''; 
            $n = 7;
            for ($j = 0; $j < $n; $j++) { 
                $index = rand(0, strlen($characters) - 1); 
                $link .= $characters[$index]; 
            }
            $query = "  
            INSERT INTO survey_table 
                 (Project_id, Employee_name, Survey_link, Employee_mail, Gender, Tenure, Department, Location, Age, Designation, Business_unit)  
                 VALUES ('$projectid', '$employee', '$link', '$employeemail', '$gender', '$tenure', '$department', '$location', '$age', '$designation','$businessunit')  
            ";  
            mysqli_query($dbconnect, $query);  





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
$mail->addAddress($employeemail, 'culturelytics');
$mail->Subject = 'KAIWA';

$appurl = $baseurl.$link;
$message = "Please click here to beign your conversation with Kaiwa <br>".$appurl;
$mail->msgHTML($message);
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->send();
       
               }
             
              
           
          





         $output = '';

           $select = "SELECT * FROM survey_table where Project_id = $projectid";  
           $result = mysqli_query($dbconnect, $select);  
           $output .= '  
                 
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
<div id="table-wrapper"> <div id="table-scroll">
                <table class="table table-bordered">  
                     <tr>  
                          
                          <th width="25%">Project ID</th>  
                          <th width="35%">Employee ID</th>  
                          <th width="10%">Link</th>  
                          <th width="20%">Mail ID</th>  
                         
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                         
                          <td>'.$row["Project_id"].'</td>  
                          <td>'.$row["Employee_name"].'</td>  
                          <td>'."<a href =".'"'.$baseurl.$row["Survey_link"].'" target ='.'"'."_blank".'">click here to test survey  </a>'.'</td>  
                          <td>'.$row["Employee_mail"].'</td>  
                         
                     </tr>  
                ';  
           }  
           $output .= '</table></div</div>';  
           echo $output;  
     
 ?>  




