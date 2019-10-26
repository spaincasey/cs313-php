<?php
require "dbConnect.php";
$db = get_db();
$email = $_GET["obj"];
$statement = $db->prepare("SELECT email FROM User_app WHERE email = $email");
$statement->execute();
if(mysql_num_rows($sql)>=1)
   {
    echo"name already exists";
   }
 else
    {
   //insert query goes here
    }

?>