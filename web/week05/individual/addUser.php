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

// $statement = $db->prepare("SELECT * FROM User_app WHERE email = '$q'");
// $result = $statement->execute();
// echo "<h3>This email is already registered<h3>";
// //select exists(select 1 from contact where id=12)
// if($result){
//    echo "Email already exists in the system";
// }
// else
// {
   $statement2 = $db->prepare("INSERT INTO User_app(email)VALUES('$q')");
   $statement2->execute();
   // Go through each result
   // while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   // {
   //    // $category = $row['category'];
   //    $email = $row['email'];
   //    // $image = $row['image'];
   //    console.log($email);
   //    echo "<h3>$email<h3>";
   // //   echo "<img src='$image' class='img-responsive' alt='Image'>";
   // }
// }

?>