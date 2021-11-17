<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 90%; margin-left: 3%">
            <div class="container" style="height: 60%; width: 90%; background-color: rgba(255, 254, 255, 0.7 ); border-bottom-right-radius: 15px; border-top-left-radius: 15px; border:black;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center> <img src="3.jpg" hspace="22px;"  style="height: 40%; width: 40%; border: solid; border-color: white; border-bottom-right-radius:14%; border-top-left-radius: 14%; "></img><br><font size="4" ><u><b>Delete staff</b></u></font></center><br><br>

                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from staff_info where userid='".$row['userid']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid" >
					<!--<h5><center>Firstname: <strong><?php echo $drow['firstname']; ?></strong></center></h5> -->
					 <input class="input-field" type="text" value="<?php echo $drow['staffname']; ?>" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;"><br><br>
                </div> 
				</div>
                <div class="modal-footer">
                   <button type="submit" name="Enroll" style="font-family: 'Arial'; color: white!important;  font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: #b3b3b3; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); margin-left: 0%;"> Cancel</button>
                   <button type="submit" name="Enroll" style="font-family: 'Arial'; color: white!important;  font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: #b3b3b3; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); margin-left: 0%;"> <a href="delete.php?id=<?php echo $row['userid']; ?>" > Delete</a></button>
                </div>
 
            </div>
        </div>
    </div>
<!-- /.modal -->
 



    <!-- /.modal -->
     <div class="modal fade" id="edit<?php echo $row['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog " style="width: 90%; margin-left: 3%">
    	<div class="container" style="height: 60%; width: 90%; background-color: rgba(255, 254, 255, 0.7 ); border-bottom-right-radius: 15px; border-top-left-radius: 15px; border:black;">
    		<?php
					$edit=mysqli_query($conn,"select * from staff_info where userid='".$row['userid']."'");
					$erow=mysqli_fetch_array($edit);
				?>
    <div class="mt-5">
      <center> 
          <form method="post" action="edit.php?id=<?php echo $erow['userid']; ?>"><br>
            <img src="3.jpg" hspace="22px;"  style="height: 40%; width: 40%; border: solid; border-color: white; border-bottom-right-radius:14%; border-top-left-radius: 14%; "></img><br><font size="4" ><u><b>Edit Staff Information</b></u></font><br><br>

                     <input class="input-field" type="text" placeholder="Staff name" name="staffname" value="<?php echo $erow['staffname']; ?>" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;"><br><br>

                      <input class="input-field" type="text" placeholder="Username" name="username" value="<?php echo $erow['username']; ?>" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;"><br><br>
										
			          <input class="input-field" type="text" placeholder="Password" name="password" value="<?php echo $erow['password']; ?>" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;"><br><br>
                

                     

 <button type="submit" style="font-family: 'Arial'; color: white!important;  font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: #b3b3b3; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); margin-left: 0%;">Edit </button>

   <button type="button" class="btn btn-default" data-dismiss="modal" style="font-family: 'Arial'; color: white!important; font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: gray; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); margin-left: 10%;">Close</button>
 
     </form>
          <br>
      </center>
    </div>
  </div>
          	          			
    </div> 