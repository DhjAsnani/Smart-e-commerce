<?php
require 'connect.inc.php';
$query_1 = "SELECT * FROM `mobiledb`";
if($query_1_run = mysql_query($query_1))
{
  for($i=0;$i < mysql_num_rows($query_1_run);$i++)
  {
    $q_1_brand = mysql_result($query_1_run,$i,'brand');
    $q_1_camera = mysql_result($query_1_run,$i,'camera');
    $q_1_screen = mysql_result($query_1_run,$i,'screen');
    $q_1_price = mysql_result($query_1_run,$i,'price');
    $q_1_brand_query = "SELECT `value_b` FROM `brand_value_map` WHERE `brand` = '$q_1_brand'";
    $q_1_camera_query = "SELECT `value_c` FROM `camera_value_map` WHERE `camera` = '$q_1_camera'";
    $q_1_screen_query = "SELECT `value_s` FROM `screen_value_map` WHERE `screen` = '$q_1_screen'";
    $q_1_price_query = "SELECT `value_p` FROM `price_value_map` WHERE  `price` = '$q_1_price'";
    $q_1_brand_query_run = mysql_query($q_1_brand_query);
    $q_1_camera_query_run = mysql_query($q_1_camera_query);
    $q_1_screen_query_run = mysql_query($q_1_screen_query);
    $q_1_price_query_run = mysql_query($q_1_price_query);
    $q_1_brand_query_value = mysql_result($q_1_brand_query_run,0);
    //echo $q_1_brand_query_value;
    //echo "<br>";
    $q_1_camera_query_value = mysql_result($q_1_camera_query_run,0);
    //echo $q_1_camera_query_value;
    //echo "<br>";
    $q_1_screen_query_value = mysql_result($q_1_screen_query_run,0);
    //echo $q_1_screen_query_value;
    //echo "<br>";
    $q_1_price_query_value = mysql_result($q_1_price_query_run,0);
    //echo $q_1_price_query_value;
  //  echo "<br>";
    $finalrating = $q_1_brand_query_value * $q_1_camera_query_value * $q_1_screen_query_value / $q_1_price_query_value ;
  //  echo $finalrating= round($finalrating);
    //echo "<br>";
    $rating_query = "UPDATE `mobiledb` SET `rating_value` = '$finalrating' WHERE `brand` ='$q_1_brand'AND `camera`='$q_1_camera' AND `screen` = '$q_1_screen' AND `price` = '$q_1_price' ";
    //echo "$rating_query";
    mysql_query($rating_query);
  }
}
 ?>
