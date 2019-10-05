<?php
   session_start();
?>

<?php
// foreach($_SESSION['items'] as $product) {
//     echo($product->name);
//   }
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
$_GET['item']
//var_dump($_GET['item']);
// echo "$_GET['item']"
// $name = $_GET['item']->name;
// $price = $_GET['item']->price;
// $image = $_GET['item']->image;
// $button = $_GET['item']->button;

//$newItem = new Item($name, $price, $image, $button);
//array_push($_SESSION['cart'], $newItem);

// array_push($_SESSION['cart'], $_GET['item']);
// $_SESSION['cart'][] = $_GET['item'];
// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Pragma: no-cache");
// if (isset($_SESSION['cart'])) {
//     $name = $_GET['item->name'];
//     $price = $_GET['item->price'];
//     $image = $_GET['item->image'];
//     $button = $_GET['item->button'];
    
//     $newItem = new Item($name, $price, $image, $button);
//     array_push($_SESSION['cart'], $newItem);
// }
// else {
//     $_SESSION['cart'] = array();
//     $_SESSION['cart'][] = $_GET['item'];
// }
//echo($_SESSION['cart']);
// Useful for debugging
//session_destroy();
//header("Location: shophome.php");
//die();
?>