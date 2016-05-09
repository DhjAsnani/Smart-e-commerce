<?php
require 'connect.inc.php';
$query = "UPDATE `logindetails` SET `mycart`=',' WHERE `login`='1' ";
if(mysql_query($query))
{
  header("Location: cart.php");
}
 ?>
