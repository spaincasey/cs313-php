<?php

require "dbConnect.php";
$db = get_db();

$statement = $db->prepare("SELECT email FROM User_app");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// $category = $row['category'];
    $email = $row['email'];
    echo "<h3>$email<h3>";
//   echo "<img src='$image' class='img-responsive' alt='Image'>";
}
?>