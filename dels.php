<?php
require 'connect.inc.php';
$fi = $_GET['val'];
echo "$fi";
$query = "SELECT `mycart` FROM `logindetails` WHERE `login`='1' ";
echo "$query";
if(mysql_query($query))
{
  $mycart = mysql_result(mysql_query($query),0,'mycart');

  $mycart=str_replace($fi,'',$mycart);

  $query2 = "UPDATE `logindetails` SET `mycart`='$mycart' WHERE `login`='1' ";
  if(mysql_query($query2))
  {
    header("Location: cart.php");
  }
}
 ?>
