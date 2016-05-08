<?php
require 'connect.inc.php';

if(isset($_POST['email'])&&isset($_POST['password']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM `logindetails` WHERE `email`='$email' AND `password` = '$password'";
  //echo "$query";
if($query_run = mysql_query($query))
{


    if(mysql_num_rows($query_run)==0)
    {
      echo "Invalid Email or Password\n";
      echo "Try again <a href='loginreg.php'>Here</a>";
    }
    else {
    $id  = mysql_result($query_run,0,'id');
    echo "$id";
      $query2 = "UPDATE `logindetails` SET `login`='1' WHERE `id` = '$id'";
      if($query2run = mysql_query($query2))
      {
        header('Location: index.php');
      }


    }
  }
}



 ?>
