<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-2-fit=no">
  <link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="C:\Users\ASUS\Downloads\project downloads\3.jpg">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="icon" type="image/x-icon" href="3.jpg">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <style type="text/css">
		body {
		font-family: sans-serif;
		}
		
		main {
			width: 80%;
			margin: 0 auto;

		}
		
			
		a {
			color: #fff;
			text-decoration: none;
			text-align: left;
		}
		img{
			height: 35px;
			 width:45px; 
			 border: solid;
			  border-color: white; 
			  border-bottom-right-radius:14%;
			   border-top-left-radius: 14%;
			   margin-top: 10px; 
		}

tr:nth-child(even) {background-color: silver;}
	</style>
	<style type="text/css">
    body {
    font-family: sans-serif;
    }
    header {
      position: fixed;
      top: 0;
      left: 0;
        width: 100%;
        height: 62px;
        background:linear-gradient(90deg, rgba(4,25,38,1) 22%, rgba(16,45,60,1) 78%, rgba(11,50,69,1) 91%, rgba(12,75,106,1) 100%);
    }
    main {
      width: 80%;
      margin: 0 auto;

    }    
    .nav-toggle {
      position: absolute;
      top: 15px;
      cursor: pointer;
      padding-left: 30px;
      color:white;
    }
    
    a {
      color: #fff;
      text-decoration: none;
      text-align: left;
      cursor: pointer;
    }
    .main-navigation {
      position: fixed;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      background:linear-gradient(90deg, rgba(4,25,38,1) 22%, rgba(16,45,60,1) 78%, rgba(11,50,69,1) 91%, rgba(12,75,106,1) 100%);
        text-align: center;
      transition: transform 0.6s ease;
    }
    .left { 
      transform: translateX(-100%);
    }
    .right {
      transform: translateX(100%);
    }
    .top {
      transform: translateY(-100%);
    }
    .bottom {
      transform: translateY(100%);
    }
    .main-navigation ul {
      margin: 3% 0 0;
      padding: 0;
    }
    .main-navigation ul li span:nth-child(2) {
        margin-left: 1px;
        font-size: 14px;
        font-weight: 600;
    }
    .main-navigation ul li i {
        color: #0497df;
        min-width: 20px;
        text-align: center;
        margin-left: 1%;
    }
    .main-navigation ul a {
      padding-bottom: 10px;
      padding-top: 10px;
      display: block;
    }
    .main-navigation ul li {
        padding: 6px 6px;
        border-bottom: 1px solid #3c506a;
        position: relative;
    }
    .main-navigation.open {
      transform: translateX(0); 
    }
    .main-navigation .nav-toggle {
      right:3%;
      top: 3%;
    }
    img{
       height: 35px;
       width:45px; 
       border: solid;
       border-color: white; 
       border-bottom-right-radius:14%;
       border-top-left-radius: 14%;
       margin-top: 10px; 
    }
    label{
             font-size:20px;

    }
  </style>
</head>
<body style="background-repeat: no-repeat; background:linear-gradient(90deg, rgba(29,31,31,1) 6%, rgba(104,107,107,1) 31%, rgba(201,212,213,1) 50%, rgba(104,107,107,1) 75%, rgba(15,15,15,1) 95%); ">
	
	<br>
	<header>
    <center><img src="3.jpg" hspace="22px;" align="center"></img><font  color="white"  style="font-size: 25px;"><u>iTSoft Developer</u></font>
</center>

    <i class="fa fa-ellipsis-v nav-toggle" style="font-size: 30px;
 "></i>
    <nav class="main-navigation left" role='navigation'>
      <span class="nav-toggle"><i class="fa fa-close fa-2x" style="color:#0497df; "></i></span>
      <ul><br><br>
        <font color="white" size="5" style="top:10px;">eCampus</font>
        <br><br><br>
        
        <li>
          <a href="staff_dashboard.php">
              <span><i class="fa fa-home"></i></span>
              <span>Dashboard</span>
          </a>
        </li>
        
      <li>
          <a href="student_management1.php">
            <span><i class="fas fa-book-reader"></i></span>
            <span>Student management</span>
          </a>
      </li>
      <li>
          <a i href="Add_Notice1.php">
            <span><i class="fas fa-chalkboard"></i></span>
            <span>Add notice</span>
          </a>
      </li>
      <li>
          <a href="action_on_notice1.php">
            <span><i class="fas fa-bell"></i></span>
            <span>Actions on notice</span>
          </a>
      </li>

      <li>
          <a href="view_all_notice1.php">
              <span><i class="fa fa-home"></i></span>
              <span>View all notice</span>
          </a>
        </li>


 <li>
          <a href="Messages.php">
              <span><i class="fa fa-home"></i></span>
              <span>Discussion</span>
          </a>
        </li>


      <li>
          <a href="staff_dashboard.php">
            <span><i class="fa fa-power-off"></i></span>
            <span>Log out</span>
          </a>
      </li>



</ul>
</nav>
  </header><br><br>
  
  <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>
    $(document).ready(function($) {
      $(function() {
        $('.nav-toggle').on('click', function() {
          $('.main-navigation').toggleClass('open');
        });
      });
    });
  </script><br>
	 
<div id="bd" class="cla" style="width: 98%;" align="center">

    <div style=" background-color: rgba(255, 254, 255, 0.7 ); padding-top: 0%; padding-bottom: 0%; border-bottom-right-radius: 15px; border-top-left-radius: 15px; margin-top: 2%; margin-left: 2%; width: 98%; "><center><font size="6">Actions on notice</font></center>
    </div>
        
        <div style=" background-color: rgba(255, 254, 255, 0.7 ); padding-top: 0%; padding-bottom: 5%; border-bottom-right-radius: 15px; border-top-left-radius: 15px; margin-top: 3%; margin-left: 2%; width: 98%; ">
          <br>
  

    <center>
    <table  style="border-collapse: collapse; background-color: white; width: 95%;">
      <thead style="background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); " >
        <th style="color: white;"> Title</th>
        <th style="color: white;">Notice</th>
        <th style="color: white;">Action</th>
      </thead>
      <tbody>
      <?php
        include('database_connection.php');
        
        $query=mysqli_query($conn,"select * from `images`");
        while($row=mysqli_fetch_array($query)){
 
         
          ?>
          <tr>

            <td><?php echo $row['title']; ?></td>
            <td><a href="#display<?php echo $row['id']; ?>" data-toggle="modal" style="color: black;"><?php echo $row['file_name']; ?></a></td>
            <!--<td><img src="<?php echo $row['imagename']; ?>"></td>-->
            <td>
              
              <button type="button"    style="background: transparent; margin: 3%;"><a href="#del<?php echo $row['id']; ?>" data-toggle="modal"><span class="glyphicon glyphicon-trash" style=" padding: 2%; font-size: 110%;  background: transparent; color: black; min-width: 5%; border-top-left-radius: 15px; text-align: center; height:5%;"></span></a></button>
  
              
              <?php include('delnotice.php'); ?>
             <?php include('displayimg.php'); ?>
             
            </td>
          </tr>
          <?php
        }
 
      ?>
      </tbody>
    </table>
    </center>
  </div>
  <?php include('displayimg.php'); ?>
                           
    </div> 
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
</body>
</html>