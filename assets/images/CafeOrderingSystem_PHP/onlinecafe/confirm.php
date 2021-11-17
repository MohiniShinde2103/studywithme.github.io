<?php 
 require_once('auth.php');
?>
<form method ="post" action ="">
<?php
$total=$_POST['total'];
$transactioncode=$_POST['transactioncode'];

?>
<input name="transactioncode" type="hidden" value="<?php echo $transactioncode;?>" />
<input name="total" type="hidden" value="<?php echo $total;?>" />

</form>
<?php
include('connection.php');
$total=$_POST['total'];
$trasactiondate=date("m/d/Y");
$transactioncode=$_POST['transactioncode'];	
$student = $_POST['num'];

$data = mysql_query("SELECT * FROM  members") or die(mysql_error());  
 while($info = mysql_fetch_array( $data )) {
 $stud = $info['studentnum'];
} 
if($student != $stud){
echo "wrong student Num";
exit(0);
}

mysql_query("INSERT INTO wings_orders (cusid, total, transactiondate, transactioncode) VALUES('$stud', '$total','$trasactiondate', '$transactioncode')");


?>
<a rel="facebox" href="order.php"><img src="images/28.png" width="75px" height="75px" /></a>

