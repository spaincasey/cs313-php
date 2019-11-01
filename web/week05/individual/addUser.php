<?php
// Start the session
session_start();
require "dbConnect.php";
$db = get_db();

$first = $_REQUEST["fname"];
$last = $_REQUEST["lname"];
$email = $_REQUEST["email"];
$statement2 = $db->prepare("INSERT INTO User_app(first_name, last_name, email)VALUES('$first', '$last', '$email')");
$statement2->execute();
$_SESSION['name'] = $first += " " += $last;

?>