<?php
// Start the session
include 'item.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping Home</title>
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
    <h1>Shop Home</h1>      
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="viewCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
$_SESSION['items']=array();
if(empty($_SESSION['cart']))
  $_SESSION['cart'] = array();

$_session['items'] = $_POST;

for ($x = 1; $x <= 9; $x++) {
  $name = "Item {$x}";
  $price = 15.00;
  $image = "images\T-shirt.jpg";
  $button = "Button {$x}";
  
  $newItem = new Item($name, $price, $image, $button);
  array_push($_SESSION['items'], $newItem);
}

for ($x = 0; $x < 9; $x++) {
  if($x % 3 == 0)
  {
    if($x != 0)
    {
      echo"</div></div>";
    }
    echo"<div class='container'>";
    echo"<div class='row'>";
  }
  echo"<div class='col-sm-4'>";
  echo"<div class='panel panel-primary'>";
    echo"<div class='panel-heading'><div class='panel-title pull-left'>{$_SESSION['items'][$x]->name}</div><div class='panel-title pull-right'>$";
    echo $english_format_number = number_format($_SESSION['items'][$x]->price, 2, '.', '');
    echo "</div><br></div>";
    echo"<div class='panel-body'><img src='{$_SESSION['items'][$x]->image}' class='img-responsive' style='width:100%' alt='Image'></div>";
    echo"<div class='panel-footer'><form action='addtocart.php' method='get'><input type='hidden' name='product' value='{$x}'></input><input type='submit' name='{$_SESSION['items'][$x]->button}' value='Add to Cart'/></form></div></div></div>";
}

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