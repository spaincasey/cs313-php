<?php
// Start the session
session_start();
require "dbConnect.php";
$db = get_db();

$first = $_REQUEST["fname"];
$last = $_REQUEST["lname"];
$email = $_REQUEST["email"];
$statement = $db->prepare("SELECT email FROM User_app WHERE email = '$email'");
$statement->execute();
if ($_POST['action'] == 'Sign in') {
    if (pg_num_rows($statement)) {
      $_SESSION["name"] = $first += " " += $last;
    }
    else {
      echo '<script language="javascript">';
      echo 'alert("This email does not exist in our records")';
      echo '</script>';
    }
}
else if ($_POST['action'] == 'Sign up') {
    if (pg_num_rows($statement)) {
      echo '<script language="javascript">';
      echo 'alert("This email is already registered")';
      echo '</script>';
    }
    else {
      echo '<script language="javascript">';
      echo 'alert("This email does not exist in our records")';
      echo '</script>';
    }
}

$first = $_REQUEST["fname"];
$last = $_REQUEST["lname"];
$email = $_REQUEST["email"];
$statement2 = $db->prepare("INSERT INTO User_app(first_name, last_name, email)VALUES('$first', '$last', '$email')");
$statement2->execute();
$_SESSION["name"] = $first += " " += $last;

?>