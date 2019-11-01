<?php

require "dbConnect.php";
$db = get_db();

$statement = $db->prepare("SELECT user_app_id, review_text FROM Review");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// $category = $row['category'];
    $user_app = $row['user_app_id'];
    $statement2 = $db->prepare("SELECT first_name, last_name FROM User_app WHERE id = '$user_app'");
    $statement2->execute();
    // $name = '';
    while ($row2 = $statement2->fetch(PDO::FETCH_ASSOC))
    {
        $name = $row2['first_name'] + " " + $row2['last_name'];
    }
	$review = $row['review_text'];
    echo "<h3>$name</h3>";
    echo "<p>$review</p>";
}
?>