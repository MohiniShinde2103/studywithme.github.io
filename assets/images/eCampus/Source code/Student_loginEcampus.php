<?php 

session_start();
$con=mysqli_connect('sql311.epizy.com','epiz_25827727','0vwlrWNM5hh');  
mysqli_select_db($con,"epiz_25827727_ecampus");
$age="";

if(isset($_POST['login'])){
  $user = trim($_POST['uname']);
  $password = trim($_POST['password']);
  
  $sql = "select * from stud_info where uname = '".$user."'";
  $rs = mysqli_query($con,$sql);
  $numRows = mysqli_num_rows($rs);
  
  if($numRows  == 1){
    $row = mysqli_fetch_assoc($rs);
    if(password_verify($password,$row['password'])){
      $_SESSION['un']=$user;
    $_SESSION['unm']=$user;
    header("location:student_dashboard.php");
    }
    else{
      $age="Wrong Password";
    }
  }
  else{
    $age="No User found";
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
<script type="text/javascript">
  function Showpassword()
  {
    var pw=document.getElementById('pwd');
    if(pw.type=="text")
    {
      pw.type="password";
    }
    else
    {
      pw.type="text";
    }
  }

  
</script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="styles7heet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>eCampus2</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/x-icon" href="C:\Users\Admin\Desktop\logo\3.jpg">
  </head>


  <body style="background: linear-gradient(90deg, rgba(4,25,38,1) 22%, rgba(16,45,60,1) 78%, rgba(11,50,69,1) 91%, rgba(12,75,106,1) 100%);">
  
  <div class="container" style="height: 160%; width: 90%; background-color: rgba(255, 254, 255, 0.7 ); border-radius: 35px; border:black;">
  <div class="mt-5">
  <center> 
  <form method="post" action="">
    <font family="Arial" ><br><br><b><h3>Student Login</h3></b></font><br>

    <img src="3.jpg"   style="height: 25%; width: 25%; border: solid; border-color: white; border-bottom-right-radius:24%; border-top-left-radius: 24%;"></img><br><font size="5" ><u>iTSoft Developer</u></font><br><br>
    <font family="Arial" color="red"><b><p><?php echo $age; ?></p></b></font>

    <div class="input-container" style="display: -ms-flexbox; display: flex; width: 100%; margin-bottom: 15px;">
      <i class="fa fa-user icon" style=" padding: 10px; background: white; color: black; min-width: 50px; border-top-left-radius: 15px; text-align: center; height: 40px;"></i>
        <input class="input-field" type="text" placeholder="Roll_no" name="uname" id="uname" required="" style="width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;">
    </div>


    <div class="input-container" style="display: -ms-flexbox; display: flex; width: 100%; margin-bottom: 15px;">
        <i class="fa fa-key icon" style=" padding: 10px; background: white; color: black; min-width: 50px; border-top-left-radius: 15px; text-align: center; height:40px;"></i>
          <input type="password" id="pwd" name="password" placeholder=" Password" required="" style="width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; "><button onclick="Showpassword();" style="background: white; min-width: 50px; border-bottom-right-radius: 15px; height: 40px; border: none;"><i class="fas fa-eye"></i></button>
    </div><br>

    <button type="login" onclick="test_str()" class="btn btn-default" name="login" style="font-family: 'Arial'; color: white!important; font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: gray; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); margin-left: 30px;">Login</button><br><br><br>

        
  </form>
</center>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>