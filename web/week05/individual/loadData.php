<?php

require "dbConnect.php";
$db = get_db();

$statement = $db->prepare("SELECT description, image FROM Job");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// $category = $row['category'];
	$description = $row['description'];
	$image = $row['image'];
  echo "<h3>$description<h3>";
  echo "<img src='$image' class='img-responsive' alt='Image'>";
}
?>