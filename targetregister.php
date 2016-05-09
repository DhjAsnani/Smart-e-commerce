<?php
require 'connect.inc.php';
if(isset($_POST['email'])&&isset($_POST['name'])&&isset($_POST['password'])&&isset($_POST['cnf_password'])&&isset($_POST['gender']))
{

  $email = $_POST['email'];

  $password = $_POST['password'];
  $cnf_password = $_POST['cnf_password'];
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $id = 125 + strlen($email) + strlen(  $password) + strlen($name) + strlen($gender);
  if($password!=$cnf_password)
  {
    echo "Password Not Matched\nFill form Again <a href='register.php'>HERE</a>";
  }
  else {
    $query_1 = "SELECT `email` FROM `logindetails` WHERE `email`='$email'";
    if($query_run_1 = mysql_query($query_1))
    {
      if(mysql_num_rows($query_run_1)>0)
      {
        echo "This email already exist, try new one at <a href='register.php'>HERE</a>";
      }
      else {

        $query = "INSERT INTO `logindetails` VALUES ('$id','$name','$email','$password','$gender','0')";
        if($query_run = mysql_query($query))
        {
          echo "USER REGISTERED Now login <a href='loginreg.php'>HERE</a>";
        }
        else {
          echo "Fill form Again <a href='register.php'>HERE</a>";
        }
      }
    }
  }
}
 ?>
