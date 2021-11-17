<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<table width="249" border="1" cellpadding="0" cellspacing="0">
  <tr >
    <td width="189"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;Products</div></td>
	<td width="65">Price</td>
    <td width="50">Qty</td>
  </tr>
  
<?php
	if (isset($_GET['id']))
	{		   
								include('connection.php');
							
								$id=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM orderditems where transactioncode ='$id'");
								
								
								while($row3 = mysql_fetch_array($result3))
								  {  
  
  
  echo '<tr>';
    echo '<td><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;'.$row3['name'].'    '.'</div></td>';
	echo '<td>'.'M'.$row3['price'].'.00'.'</td>';
    echo '<td>'.$row3['quantity'].'</td>';
  echo '</tr>';


  }
  }
  ?>
</table><br>

<?php
	if (isset($_GET['id']))
	{		   
								include('connection.php');
							
								$id=$_GET['id'];
								
								$result3 = mysql_query("SELECT * FROM orderditems where transactioncode ='$id'");
								$row3 = mysql_fetch_array($result3);
								$var=$row3['customer'];
								$result4 = mysql_query("SELECT * FROM members where id ='$var'");
								$row4 = mysql_fetch_array($result4);
						
  }
  ?>




<br />

