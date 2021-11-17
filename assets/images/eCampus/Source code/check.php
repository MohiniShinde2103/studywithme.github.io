<?php
@session_start();
$con=mysqli_connect('sql311.epizy.com','epiz_25827727','0vwlrWNM5hh'); 
mysqli_select_db($con,"epiz_25827727_ecampus");
$age="";

if(isset($_REQUEST["login"]))
{
  $user=$_REQUEST["uname"];
  $pass=$_REQUEST["password"];
  $query="select uname,password from admin_info where uname='$user' && password='$pass'";
  $result=mysqli_query($con,$query);
  $rowcount=mysqli_num_rows($result);
  if($rowcount==true)
  {
    $_SESSION['un']=$user;
    $_SESSION['unm']=$user;
    header("location:admin_dashboard.php");
  }
  else
  {
    $age="Invalid username or password";
  }
}

?>