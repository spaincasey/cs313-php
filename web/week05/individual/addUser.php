<?php
require "dbConnect.php";
$db = get_db();
$q = $_REQUEST["q"];
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

$statement = $db->prepare("SELECT EXISTS (SELECT * FROM User_app WHERE email = '$q')");
$exists = $statement->execute();
//select exists(select 1 from contact where id=12)
if($exists){
   echo 'alert(Your email is already registered)';
}
else
{
    
$statement = $db->prepare("INSERT INTO User_app(email)VALUES('$q')");
$statement->execute();
// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// $category = $row['category'];
	$email = $row['email'];
   // $image = $row['image'];
   console.log($email);
   echo "<h3>$email<h3>";
//   echo "<img src='$image' class='img-responsive' alt='Image'>";
}
}

?>