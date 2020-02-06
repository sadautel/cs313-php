<?php
   require "dbConnect.php";
   $db = get_db();
   $client_name = $db->prepare("SELECT * FROM client");
   $client_name->execute();
   while ($nRow = $client_name->fetch(PDO::FETCH_ASSOC))
   {
      $first_name = $nRow["first_name"];
      $last_name = $nRow["last_name"];
   }

   $client_contact = $db->prepare("SELECT * FROM client_contact");
   $client_contact->execute();
   while ($cRow = $client_contact->fetch(PDO::FETCH_ASSOC))
   {
      $email = $cRow["email"];
      $phone_number = $cRow["phone_number"];
   }

   $client_check_in = $db->prepare("SELECT * FROM client_check_in");
   $client_check_in->execute();
   while ($iRow = $client_check_in->fetch(PDO::FETCH_ASSOC))
   {
      $check_in_date = $iRow["check_in_date "];
      $check_in_time  = $iRow["check_in_time"];
     
   }
   
   echo "<p> Name: $first_name $last_name</p>";
   echo "<p> Contact: $phone_number <br> $email</p>";
   echo "<p> Date and time: $check_in_date $check_in_time</p>";

   echo "<p> Name: $first_name $last_name</p>";
   echo "<p> Contact: $phone_number <br> $email</p>";
   echo "<p> Date and time: $check_in_date $check_in_time</p>";
 
   echo "<p> Name: $first_name $last_name</p>";
   echo "<p> Contact: $phone_number <br> $email</p>";
   echo "<p> Date and time: $check_in_date $check_in_time</p>";

   ?>

