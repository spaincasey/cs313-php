<?php
// Start the session
include 'item.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="shoppingCart.css">
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>About</h1>      
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="browseItems.php">Home</a></li>
        <li class="active"><a href="">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php 
        $size = sizeof($_SESSION['cart']);
        echo "<li><a href='viewCart.php'><span class='glyphicon glyphicon-shopping-cart'></span> Cart({$size})</a></li>";
        ?>
      </ul>
    </div>
  </div>
</nav>
<div class="text-center">
    <h3>About</h3>
    <p>My name is Casey Spain. I'm from Rigby, ID. I served my mission in the Pennsylvania, Philadelphia Mission. 
    <br>I've been married for about 2 and a half years now. I hobbies range form music to sports and a bunch of random stuff in between.
    <br>My favorite sport is baseball and my favorite team is the Atlanta Braves. I play guitar and sing and I'm always listening to music.
    <br> My major is Software Engineering and my biggest hope for my career is that I can have a flexible enough schedule to travel and spend time with my family. </p>
    <br>
    <img src="images\braves_game.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
</div>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

<?php
// session_unset();
// session_destroy();
?>

</body>
</html>