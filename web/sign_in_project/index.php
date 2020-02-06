<?php
   require "dbConnect.php";
   $db = get_db();
   $client_name = $db->prepare("SELECT * FROM client");
   $client_name->execute();

   $client_contact = $db->prepare("SELECT * FROM client_contact");
   $client_contact->execute();
 
   while ($nRow = $client_name->fetch(PDO::FETCH_ASSOC))
   {
      $first_name = $nRow["first_name"];
      $last_name = $nRow["last_name"];

      while ($cRow = $client_contact->fetch(PDO::FETCH_ASSOC))
      {
          $email = $cRow["email"];
          $phone_number = $cRow["phone_number"];   
      }

      echo "<p> Name: $first_name $last_name</p>";
      echo "<p> Contact: $phone_number <br> $email</p>";
   }

 
   ?>

