<?php
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

<?php
unset($_SESSION['cart'][$_GET['product']]);
$_SESSION['cart'] = array_values($_SESSION['cart']); 
//array_push($_SESSION['cart'], $_SESSION['items'][$_GET['product']]);

header("Location: viewCart.php");
die();
?>
</body>
</html>