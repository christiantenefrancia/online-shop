<?php
include('admin/connect.php');


$get_id=$_GET['id'];
echo $get_id;

mysql_query("update order_details set status='Delivered', modeofpayment='COD' where orderid='$get_id'")or die(mysql_error());

header('location:user_iPhone.php');

?>