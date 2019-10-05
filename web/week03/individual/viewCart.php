<?php
// Start the session
include 'item.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Cart</title>
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
    <h1>View Cart</h1>      
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
        <li><a href="contact.php">About</a></li>
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
<?php

$it = 0;
echo"<div class='container'>";
echo"<div class='row'>";
echo"<div class='col'>";
echo"<div class='panel panel-primary'>";
echo"<div class='panel-heading'>Your Cart</div>";
echo"<div class='panel-body'>";
foreach($_SESSION['cart'] as $item){
  echo"<img src='{$item->image}' class='icon' alt='Image'>{$item->name} <p class='pull-right'>$";
  echo $english_format_number = number_format($item->price, 2, '.', '');
  echo "</p><form action='removeFromCart.php' method='get'><input type='hidden' name='product' value='{$it}'></input><input type='submit' value='Remove Item'/></form><hr>";
  $it++;
}
echo"</div><div class='panel-footer'><a href='checkout.php' class='btn btn-info' role='button'>Checkout</a></div></div></div></div></div>";

?>
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
        
    