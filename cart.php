<?php
require 'connect.inc.php';
$query ="SELECT * FROM `logindetails` WHERE `login`='1'";
if($query_run=mysql_query($query))
{
  if(mysql_num_rows($query_run)==0)
  {
    header("Location: index.php");
  }

}
  ?>
<?php
require 'connect.inc.php';
$yo="";
$query = "SELECT `mycart` FROM `logindetails` WHERE `login`='1'";
if(mysql_query($query))
{
  $yo = mysql_result(mysql_query($query),0,'mycart');
}

$array = explode(',', $yo);

 ?>
 <?php
 require 'core.inc.php';
 require 'connect.inc.php';
 $query = "SELECT * FROM `logindetails` WHERE `login`='1'";
 if($queryrun = mysql_query($query))
 {
   if(mysql_num_rows($queryrun)>0)
   {
   $name = mysql_result($queryrun,0,'name');
   echo "Welcome !, $name";
 }
 else {
   echo "You are not logged in!";
 }
 }
 ?>
 <!doctype html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Smart-e-commerce </title>
   <link rel="icon" href="titlego.png">
   <link href = "css/bootstrap.min.css" rel="stylesheet">
   <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
   <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
   <link href="css/freelancer.css" rel="stylesheet">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>

   <style>
   .dp{
     max-width: 150px;
     max-height: 150px;
     border-radius: 100%;
   }
   #lol
   {
     max-width: 100px;
     max-height: 100px;
   }
   div{display: block;}
   img{
     max-width: 40px;
     max-height: 40px;
   }
   .yo{ float: left;}
   .headingm{color: #000}
   .kakkarotwho{color: #000; }
   .menu-style {
       color: #000;
       padding-top: 45px;
       padding-bottom: 45px;
       margin-bottom: 30px;
       margin: 10px;
     -webkit-transition: all 0.3s;
     transition: all 0.3s;
       border: 1px solid transparent;
   display: inline-block

   }
   a {
    color: #000;
    font-size: 17px;
}
   </style>
 </head>
 <body>
   <nav>
   <div class="navbar navbar-inverse navbar-static-top" role="navigation">

       <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" rel="home" href="index.php" title="Aahan Krish's Blog - Homepage">Smart - e - Commerce</a>
       </div>

       <div class="collapse navbar-collapse navbar-ex1-collapse">

           <ul class="nav navbar-nav">
               <li><a href="#author" data-toggle="modal">About Authors</a></li>
               <li><?php $query ="SELECT * FROM `logindetails` WHERE `login`='1'";
               if($query_run=mysql_query($query))
               {
                 if(mysql_num_rows($query_run)>0)
                 {
                   echo "<a href='logout.php'>Logout</a>";
                 }
                 else {
                   echo "<a href='loginreg.php' >Login</a>";
                 }
               }
                 ?>
               <li><?php $query ="SELECT * FROM `logindetails` WHERE `login`='1'";
               if($query_run=mysql_query($query))
               {
                 if(mysql_num_rows($query_run)>0)
                 {
                     echo "<a href='account.php' >My Account</a>";
                 }
                 else {

                   echo "<a href='register.php'>Register</a>";
                 }
               }
                 ?></li>

               <?php $query ="SELECT * FROM `logindetails` WHERE `login`='1'";
               if($query_run=mysql_query($query))
               {
                 if(mysql_num_rows($query_run)>0)
                 {
                     echo "  <li><a href='cart.php'>Your Cart</a></li>";
                     echo "  <li><a href='recommen.php'>Pref. Prod.</a></li>";
                 }

               }
                 ?>

           </ul>

           <div class="col-sm-3 col-md-3 pull-right">
             <form class="navbar-form" role="search" action="searchme.php" method="POST">
             <div class="input-group">
                 <input type="text" class="form-control" placeholder="Search by brand" name="srch-term" id="srch-term">
                 <div class="input-group-btn">
                     <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                 </div>
             </div>
             </form>
           </div>

       </div>
   </div></nav>
   <div class="container">
     <h3><i>My Cart</i></h3>
     <hr>
     <?php
     require 'connect.inc.php';
     $yo="";
     $query = "SELECT `mycart` FROM `logindetails` WHERE `login`='1'";
     if(mysql_query($query))
     {
       $yo = mysql_result(mysql_query($query),0,'mycart');
     }
  echo "<a href='allclear.php' role='button'  class = 'btn btn-primary'> Clear Cart</a><br>";
     $array = explode(',', $yo);

$totalsum = 0;
       for( $i=1;$i<sizeof($array);$i++)
       {
         $querygo = "SELECT * FROM `mobiledb` WHERE `id`='$array[$i]'";
         if(mysql_query($querygo)&&$array[$i]!=""){
         $name = mysql_result(mysql_query($querygo),0,'name');
          $brand =  mysql_result(mysql_query($querygo),0,'brand');
          $id = mysql_result(mysql_query($querygo),0,'id');
          $camera =  mysql_result(mysql_query($querygo),0,'camera');

          $screen =  mysql_result(mysql_query($querygo),0,'screen');

          $price =  mysql_result(mysql_query($querygo),0,'price');
          $totalsum = $totalsum + $price;
           $rating_value =  mysql_result(mysql_query($querygo),0,'rating_value');
          $img = $brand.".jpg";
            $img = str_replace(' ', '', $img);
            $brand = str_replace(' ', '', $brand);
            $modallinkyo = $brand.$name.$camera;
            $modallinkyo = str_replace(' ', '', $modallinkyo);
            $modallink = '#'.$modallinkyo;

            echo "<div class='menu-style dark'><a href='$modallink' data-toggle='modal'><img src = '$img'><br><b><i>$brand</i></b><br>$name<br><i>Rare facing camera</i> $camera <b> mp</b> <br>and<i> screen of size </i> $screen<b> inches</b><br> in Just Rs. $price</a></div>";

            echo "

            <!-- Modal -->
            <div id='$modallinkyo' class='modal fade' role='dialog'>
              <div class='modal-dialog'>

                <!-- Modal content-->
                <div class='modal-content'>
                  <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    <h4 class='modal-title'>Specification</h4>
                  </div>
                  <div class='modal-body'>
                  <img src='$img' id='lol'><br>
                  <marquee><b>Offer Offer Offer</b></marquee>
                    <p>Here Comes the <b>$brand</b><br><i>$name</i><br>
                    with a powerful camera of $camera MP and <br>
                    amazing display size of $screen inches<br>
                    Only in<b> Rs.$price <i>Only</i></b><br>
                    <h3><i>Grab it before it walks away </i></h3><br>
                    </p>
                  </div>
                  <div class='modal-footer'>
                    <a href='dels.php?val=$array[$i]' role='button'  class = 'btn btn-primary'> Remove from cart</a><br>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                  </div>
                </div>

              </div>
            </div>";
       }

     }
     echo "<h3>Total amount of your cart-: <b><i>Rs. $totalsum /-</i></b><br>Happy Shopping! Visit us Again<br></h3>";
      ?>
      <hr>

   </div>
   <hr>
   <div id="author" class="modal fade" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">About Authors</h4>
       </div>
       <div class="modal-body">
         <img src="44.jpg" class="dp">
         <h3>1. <i>Dheeraj Asnani</i></h3>
         <h4>Delhi Technological Universty</h4>
          2K13/CO/44<hr>
          <img src="48.jpg" class="dp">
         <h3>2. <i>Divyanshu Kumar</i></h3>
         <h4>Delhi Technological Universty</h4>
          2K13/CO/48<hr>
          <img src="49.jpg" class="dp">
         <h3>3. <i>Gaurav Gupta</i></h3>
         <h4>Delhi Technological Universty</h4>
          2K13/CO/49<hr>
          <img src="50.jpg" class="dp">
         <h3>4. <i>Gautam Kumar</i></h3>
         <h4>Delhi Technological Universty</h4>
          2K13/CO/50<hr>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>

   </div>
 </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 </body>
 </html>
