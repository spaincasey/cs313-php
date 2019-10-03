<?php
// Start the session
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
    <h1>Browse Items</h1>      
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
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
class Item {
  // constructor
  public function __construct($name, $price, $image) {
      $this->name = $name;
      $this->price = $price;
      $this->image = $image;
  }
}
$items=array();

for ($x = 0; $x <= 9; $x++) {
  $name = "Item " + $x;
  $price = "$15.00"
  $image = "T-shirt.jpg"
  
  $newItem = new Item($name, $price, $image);
  array_push($newItem);
}
foreach($items as $key=>$value){
?>
  <div class="panel-heading"><div class="panel-title pull-left">T-Shirt</div><div class=" panel-title pull-right">$15.00</div><br></div>
  <div class="panel-body"><img src="images\T-shirt.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
  <div class="panel-footer"><input type="submit" name="select" value="Add to Cart" onclick="select()"/></div>
<?php
}
?>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><div class="panel-title pull-left">T-Shirt</div><div class=" panel-title pull-right">$15.00</div><br></div>
        <div class="panel-body"><img src="images\T-shirt.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><input type="submit" name="select" value="Add to Cart" onclick="select()"/></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><div class="panel-title pull-left">T-Shirt</div><div class=" panel-title pull-right">$15.00</div><br></div>
        <div class="panel-body"><img src="images\T-shirt.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><input type="submit" name="select" value="Add to Cart" onclick="select()"/></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><div class="panel-title pull-left">T-Shirt</div><div class=" panel-title pull-right">$15.00</div><br></div>
        <div class="panel-body"><img src="images\T-shirt.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><input type="submit" name="select" value="Add to Cart" onclick="select()"/></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><div class="panel-title pull-left">T-Shirt</div><div class=" panel-title pull-right">$15.00</div><br></div>
        <div class="panel-body"><img src="images\T-shirt.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><input type="submit" name="select" value="Add to Cart" onclick="select()"/></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><div class="panel-title pull-left">T-Shirt</div><div class=" panel-title pull-right">$15.00</div><br></div>
        <div class="panel-body"><img src="images\T-shirt.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><input type="submit" name="select" value="Add to Cart" onclick="select()"/></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><div class="panel-title pull-left">T-Shirt</div><div class=" panel-title pull-right">$15.00</div><br></div>
        <div class="panel-body"><img src="images\T-shirt.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><input type="submit" name="select" value="Add to Cart" onclick="select()"/></div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

<?php
// remove all session variables
function select(){
    echo "The select function is called.";
}
            
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>
