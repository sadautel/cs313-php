<?php
   require "dbConnect.php";
   $db = get_db();
  foreach ($db->query('SELECT * FROM client_check_in') as $row)
{
   $first_name = $row["first_name"];
   $last_name = $row["last_name"];
   $email = $row["email"];
   $phone_number = $row["phone_number"];

   echo "<p> Name: $first_name $last_name</p>";
   echo "<p> Contact: $phone_number <br> $email</p>";
}
 
   
   ?>

