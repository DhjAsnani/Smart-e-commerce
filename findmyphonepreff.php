<?php
require 'connect.inc.php';

$brand = $_POST['select_brand'];
$camera = $_POST['select_camera'];
$screen = $_POST['select_screen'];
$query = "SELECT * FROM `mobiledb` WHERE `brand`='$brand' AND `camera` = '$camera' AND `screen`='$screen'";
//echo $query;
if($query_run = mysql_query($query))
{


  for($i = 0;$i<mysql_num_rows($query_run);$i++)
  {

  echo mysql_result($query_run,$i,'brand');
  echo " ";
  echo mysql_result($query_run,$i,'camera');
  echo " ";
  echo mysql_result($query_run,$i,'screen');
  echo " ";
  echo mysql_result($query_run,$i,'price');
  echo " ";

  echo "<br>";
  }
}
 ?>
<html>
<head>
</head>
<body>
  <form method="POST" action="findmyphonepreff.php">
    <select name="select_brand">
      <?php
      require 'connect.inc.php';
      $query = "SELECT `brand` FROM `brand_value_map` ";
      $query_run = mysql_query($query);
      for($i = 0;$i<mysql_num_rows($query_run);$i++)
      {
        echo "<option>";
      echo mysql_result($query_run,$i);
      echo "</option>";
      }
      ?>
    </select>
    <select name="select_camera">
      <?php
      require 'connect.inc.php';
      $query = "SELECT `camera` FROM `camera_value_map` ";
      $query_run = mysql_query($query);
      for($i = 0;$i<mysql_num_rows($query_run);$i++)
      {
        echo "<option>";
      echo mysql_result($query_run,$i);
      echo "</option>";
      }
      ?>
    </select>
    <select name="select_screen">
      <?php
      require 'connect.inc.php';
      $query = "SELECT `screen` FROM `screen_value_map` ";
      $query_run = mysql_query($query);
      for($i = 0;$i<mysql_num_rows($query_run);$i++)
      {
        echo "<option>";
      echo mysql_result($query_run,$i);
      echo "</option>";
      }
      ?>
    </select>
    <input type="submit" value="Submit">
  </form>
</body>
