<?php
require "dbConnect.php";
$db = get_db();
$email = $_GET["obj"];
// $statement = $db->prepare("SELECT email FROM User_app WHERE email = $email");
// $statement->execute();
// if(mysql_num_rows($sql)>=1)
// {
//    echo"name already exists";
// }
// else
// {
// //insert query goes here
// }
    
$statement = $db->prepare("INSERT INTO User_app(email)VALUES($email)");
$statement->execute();

$statement = $db->prepare("SELECT email FROM User_app");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// $category = $row['category'];
	$email = $row['email'];
	// $image = $row['image'];
  echo "<h3>$email<h3>";
//   echo "<img src='$image' class='img-responsive' alt='Image'>";
}

?>