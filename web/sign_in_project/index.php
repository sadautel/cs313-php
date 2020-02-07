<?php
   require "dbConnect.php";
   $db = get_db();
  foreach ($db->query('SELECT * FROM client JOIN client_contact  on (client_contact_id') as $row)
{
   $first_name = $row["first_name"];
   $last_name = $row["last_name"];
   $email = $cRow["email"];
   $phone_number = $cRow["phone_number"];
}
echo "<p> Name: $first_name $last_name</p>";
echo "<p> Contact: $phone_number <br> $email</p>";
   
   ?>

