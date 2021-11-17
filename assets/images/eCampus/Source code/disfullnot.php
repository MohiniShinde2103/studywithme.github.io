<div class="modal fade" id="disfullnot<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog " style="width: 90%; margin-left: 3%">
      <div class="container" style="height: 60%; width: 90%; background-color: rgba(255, 254, 255, 0.7 ); border-bottom-right-radius: 15px; border-top-left-radius: 15px; border:black;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <?php
          $dis=mysqli_query($conn,"select * from images where id='".$row['id']."'");
          $erow=mysqli_fetch_array($dis);
        ?>
    <div class="mt-5">
      <center> 
          <form method="post" action=""><br>
                <input class="input-field" type="text" placeholder="Password" name="password" value="<?php echo $erow['title']; ?>" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;"><br><br>

                <input class="input-field" type="text" placeholder="Password" name="password" value="<?php echo $erow['description']; ?>" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;"><br><br>

                <input class="input-field" type="text" placeholder="Password" name="password" value="<?php echo $erow['file_name']; ?>" style="border-top-left-radius: 15px; width: 100%; padding: 10px; height: 40px; border: solid; border-color: white; border-bottom-right-radius: 15px;"/><br><br>
                <?php 
                  $imageURL = 'uploads/'.$row["file_name"];
                ?>
                <img src="<?php echo $imageURL; ?>" alt="" style="width:100%; height:90%; border: solid; border-color: white; border-radius: 0px;" />
                
 
     </form>
          <br>
      </center>
    </div>
  </div>
                            
    </div> 