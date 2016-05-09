<?php
require 'connect.inc.php';

$rating_value = $_GET['rating_value'];
$path = $_GET['path'];

$query2 = "UPDATE `logindetails` SET `prefprob`='$rating_value' WHERE 'login' = '1'";

if(mysql_query($query2))
{
if($path == 'inde.php')
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
}



 ?>
