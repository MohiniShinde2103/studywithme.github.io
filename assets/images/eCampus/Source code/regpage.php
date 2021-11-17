
<?php
if(isset($_POST['Register'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['rno'];
$password=$_POST['password'];

$options = array("cost"=>4);
$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);


$mobileno=$_POST['mobileno'];

$conn= new mysqli('sql311.epizy.com','epiz_25827727','0vwlrWNM5hh','epiz_25827727_ecampus');
if($conn-> connect_error){
  die('Connection failed :'.$conn->connect_error);
}
else{

   $sql = "INSERT INTO stud_info(fname,lname,uname,password,mobileno,post) VALUES ('$fname', '$lname', '$uname', '$hashPassword', '$mobileno','Student')";

$res=mysqli_query($conn, $sql);
  
       echo '<script language="javascript">';
       echo 'if(confirm("Registratin successful press OK for login")) document.location = "Student_loginEcampus.php";'; 
       echo '</script>';
   

  

  

}
}
?>
<!doctype html>
<html lang="en">
  <head>
   <link rel="icon" type="image/x-icon" href="C:\Users\Admin\Desktop\logo\3.jpg">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>eCampus3</title>

  </head>
  <body style="background: linear-gradient(90deg, rgba(4,25,38,1) 22%, rgba(16,45,60,1) 78%, rgba(11,50,69,1) 91%, rgba(12,75,106,1) 100%);">
  
  <div class="container" style="height: 160%; width: 90%; background-color: rgba(255, 254, 255, 0.7 ); border-radius: 35px; border:black;">
    <div class="mt-5">
      <center> 
          <form method="post" action=""><br>
            <img src="3.jpg" hspace="22px;"  style="height: 10%; width: 10%; border: solid; border-color: white; border-bottom-right-radius:14%; border-top-left-radius: 14%; "></img><font size="4" ><u>iTSoft Developer</u></font><br><br>

                     <input class="input-field" type="text" placeholder="First name" name="fname" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;" required=""><br><br>
                  
                     <input class="input-field" type="text" placeholder="last name" name="lname" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;" required=""><br><br>
  
                     <input class="input-field" type="text" id="rno" placeholder="Roll_no" name="rno" pattern="[0-9]{6}" title="Enter only roll number" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;" required=""><br><br>

                     <input class="input-field" type="password" placeholder="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,13}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8-13 characters"style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;" required=""><br><br>

                     <input class="input-field" type="text" placeholder="mobile no" name="mobileno" pattern="[0-9]{10}" title="Enter 10 digits only" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;" required=""><br><br>

  <!--<script type="text/javascript">

  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
      </script>
       <label class="custom-file-upload" style=" font-family: 'Arial'; color: white !important; font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px;  border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: white; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1) 22%, rgba(16,45,60,1) 78%, rgba(11,50,69,1) 91%, rgba(12,75,106,1) 100%);">
upload ID card
  <input type='file' onchange="readURL(this);" name="id_card" id="im" style="display: none;" />
 </label>
 <br>
   <div style=" width: 155px; height: 155px; border: solid; background-color: white; border-color: white; border-radius: 5px;">  
   <img id="image" src="getElementbyid" alt="" />
</div>
  <br>
 -->  <button type="Register" class="btn btn-default" name="Register" placeholder="Register" value="Register" style=" font-family: 'Arial'; color: white !important; font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px;  border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: white; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1) 22%, rgba(16,45,60,1) 78%, rgba(11,50,69,1) 91%, rgba(12,75,106,1) 100%);"> Register</button><br><br>
     </form>
          <br>
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
 