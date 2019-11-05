<?php

require "dbConnect.php";
$db = get_db();

$category = $_REQUEST["category"];
if($category == '') {
	$statement = $db->prepare("SELECT description, image FROM Job");
	$statement->execute();
	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		// $category = $row['category'];
		$description = $row['description'];
		$image = $row['image'];
	echo "<hr><img src='$image' class='img-responsive' alt='Image'>";
	echo "<h3>$description<h3>";
	}
}
else {
	$statement = $db->prepare("SELECT description, image FROM Job JOIN Category USING(id) WHERE cat_name = '$category'");
	$statement->execute();
	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		// $category = $row['category'];
		$description = $row['description'];
		$image = $row['image'];
	echo "<hr><img src='$image' class='img-responsive' alt='Image'>";
	echo "<h3>$description<h3>";
	}
}
?>