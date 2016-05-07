<?php
require 'connect.inc.php';
if(isset($_POST['email'])&&isset($_POST['password']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT `name` FROM `logindetails` WHERE `email`='$email' AND `password` = '$password'";
  //echo "$query";
if($query_run = mysql_query($query))
{


    if(mysql_num_rows($query_run)==0)
    {
      echo "Invalid Email or Password\n";
      echo "Try again <a href='loginreg.php'>Here</a>";
    }
    else {
      echo "Welcome";
    }
  }
}



 ?>
