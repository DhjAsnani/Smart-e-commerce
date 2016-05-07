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
          <a class="navbar-brand" rel="home" href="/" title="Aahan Krish's Blog - Homepage">Smart - e - Commerce</a>
      </div>

      <div class="collapse navbar-collapse navbar-ex1-collapse">

          <ul class="nav navbar-nav">
              <li><a href="#authors" data-toggle="modal">About Authors</a></li>
              <li><a href="loginreg.php">Login</a></li>
              <li><a href="register.php">Register</a></li>
              <li><a href="cart.php">Your Cart</a></li>

          </ul>

          <div class="col-sm-3 col-md-3 pull-right">
          <form class="navbar-form" role="search">
          <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
              <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
          </div>
          </form>
          </div>

      </div>
  </div></nav>
  <div class="container">
    <h3><i>Best Camera Mobile</i></h3>
    <hr>
    <?php
    require 'connect.inc.php';
    $query  ="SELECT * FROM `mobiledb` WHERE `camera` > '10' AND `rating_value` > '120'";
    if($query_run = mysql_query($query))
    {
      for( $i=0;$i<mysql_num_rows($query_run);$i++)
      {
        $name = mysql_result($query_run,$i,'name');
         $brand =  mysql_result($query_run,$i,'brand');

         $camera =  mysql_result($query_run,$i,'camera');

         $screen =  mysql_result($query_run,$i,'screen');

         $price =  mysql_result($query_run,$i,'price');
         $img = $brand.".jpg";
           $img = str_replace(' ', '', $img);
        echo "<div class='menu-style dark'><img src = '$img'><br><b><i>$brand</i></b><br>$name<br>$camera $screen in Just Rs. $price</div>";

      }
      echo "<div class='menu-style dark'><b>And Many More</b></div>";
    }

     ?>
     <hr>
     <h3><i>Best Screen Size Mobile</i></h3>
     <hr>
     <?php
     require 'connect.inc.php';
     $query  ="SELECT * FROM `mobiledb` WHERE `screen` > '5.2' AND `rating_value` > '110'";
     if($query_run = mysql_query($query))
     {
       for( $i=0;$i<mysql_num_rows($query_run);$i++)
       {
         $name = mysql_result($query_run,$i,'name');
          $brand =  mysql_result($query_run,$i,'brand');

          $camera =  mysql_result($query_run,$i,'camera');

          $screen =  mysql_result($query_run,$i,'screen');

          $price =  mysql_result($query_run,$i,'price');

          $img = $brand.".jpg";
          $img = str_replace(' ', '', $img);

         echo "<div class='menu-style dark'><img src = '$img'><br><b><i>$brand</i></b><br>$name<br>$camera $screen in Just Rs. $price</div>";

       }
       echo "<div class='menu-style dark'><b>And Many More</b></div>";
     }

      ?>
  </div>
  <hr>
</body>
</html>
