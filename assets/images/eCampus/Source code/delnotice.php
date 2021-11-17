<div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="width: 90%; margin-left: 3%">
            <div class="container" style="height: 60%; width: 90%; background-color: rgba(255, 254, 255, 0.7 ); border-bottom-right-radius: 15px; border-top-left-radius: 15px; border:black;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center> <img src="3.jpg" hspace="22px;"  style="height: 40%; width: 40%; border: solid; border-color: white; border-bottom-right-radius:14%; border-top-left-radius: 14%; "></img><br><font size="4" ><u><b>Delete Notice</b></u></font></center><br><br>

                </div>

                <div class="modal-body">
                <?php
                    $del=mysqli_query($conn,"select * from images where id='".$row['id']."'");
                    $drow=mysqli_fetch_array($del);
                ?>
                <div class="container-fluid" >
                    <h5><center>Title of notice : </center></h5> 
                     <input class="input-field" type="text" value="<?php echo $drow['title']; ?>" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;"><br><br>
                </div> 
                </div>
                
                <div class="modal-footer">
                   <button type="submit" name="Enroll" style="font-family: 'Arial'; color: white!important;  font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: #b3b3b3; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); margin-left: 0%;"> Cancel</button>
                   <button type="submit" name="Enroll" style="font-family: 'Arial'; color: white!important;  font-size: 14px; box-shadow: 1px 1px 1px #BEE2F9; padding: 10px 25px; border-top-left-radius: 10px; border-bottom-right-radius: 10px; background: #63B8EE; border-color: #b3b3b3; border: solid; background: linear-gradient(90deg, rgba(4,25,38,1)22%, rgba(16,45,60,1)78%, rgba(11,50,69,1)91%, rgba(12,75,106,1)100%); margin-left: 0%;"> <a href="delnotcode.php?id=<?php echo $row['id']; ?>" > Delete</a></button>
                </div>
 
            </div>
        </div>
    </div>