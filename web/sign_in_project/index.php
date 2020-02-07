<?php
   require "dbConnect.php";
   $db = get_db();
  foreach ($db->query('SELECT * FROM client') as $row)
{
   $first_name = $row["first_name"];
   $last_name = $row["last_name"];
   echo "<p> Name: $first_name $last_name</p>";

   foreach ($db->query('SELECT * FROM client_contact') as $cRow)
   {
      $email = $cRow["email"];
      $phone_number = $cRow["phone_number"];
   
      echo "<p> Contact: $phone_number <br> $email</p>";
   } 
}
   
   ?>

