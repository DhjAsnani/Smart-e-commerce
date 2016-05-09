<?php
require 'connect.inc.php';

$query = "UPDATE `logindetails` SET `login`='0' WHERE `login`='1'";

if($query_run=mysql_query($query))
{


  header('Location: index.php');
  
}
 ?>
