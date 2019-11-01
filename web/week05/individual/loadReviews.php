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
    
    $fname = '';
    $lname = '';
    while ($row2 = $statement2->fetch(PDO::FETCH_ASSOC))
    {
        $fname = $row2['first_name'];
        $lname = $row2['last_name'];
    }
	$review = $row['review_text'];
    echo "<hr><p>$review</p>";
    echo "<h3>- $fname $lname</h3>";
}
?>