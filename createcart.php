<?php
require 'connect.inc.php';
$id = $_GET['id'];
$path = $_GET['path'];

$query = "SELECT `mycart` FROM `logindetails` WHERE `login`='1'";
if(mysql_query($query))
{//echo mysql_num_rows(mysql_query($query));
  $mycar = mysql_result(mysql_query($query),0,'mycart');
  echo "$mycar";

}

$mycar = $mycar.','.$id;
echo "$mycar";
$query2 = "UPDATE `logindetails` SET `mycart` = '$mycar' WHERE `login`='1'";
echo "$query2";
if($query2_run=mysql_query($query2))
{
  if($path == 'index.php')
  {
  header("Location: index.php");
  }
  if($path == 'bestcam.php')
  {
  header("Location: bestcam.php");
  }
  if($path == 'bestscreen.php')
  {
  header("Location: bestscreen.php");
  }
  if($path == "4")
  {
    header("Location: similarprod.php?rating_value=113");
  }

}
 ?>
