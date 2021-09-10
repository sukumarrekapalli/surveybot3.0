<?php

$uname='';
$pass='';

session_start();

if (isset($_POST['name'])) {
    $uname= $_POST['name'];
}
if (isset($_POST['pass'])) {
   $pass=$_POST['pass'];
}

if($uname=='ascenthr' && $pass=='admin123')
{


 $_SESSION['logged_in']='1';
   header("Location: ./ascenthr-dashboard.php");
exit();
}
else
if($uname=='test' && $pass=='test000')
{


 $_SESSION['logged_in']='1';
   header("Location: ./culturelytics-dashboard.php");
exit();
}
else
if($uname=='teconnectivity' && $pass=='admin12345')
{


 $_SESSION['logged_in']='1';
   header("Location: ./te-dashboard.php");
exit();
}
else
{
    if($uname=='kaiwaadmin' && $pass=='admin1234')
{
    $_SESSION['logged_in']='1';
    $_SESSION['Username']=$uname;
   header("Location: ./landing.php");
exit();
}

if($uname=='mahindra' && $pass=='mahindrakaiwa')
{   
   $_SESSION['Username']=$uname;
    $_SESSION['logged_in']='1';
   header("Location: ./landing.php");
exit();
}
else{
 function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>";
 }
} 
  
  
// Function call 
function_alert("Invalid username or password");
 include('./index.php');

session_destroy();
}
?>