<?php
   require "dbConnect.php";
   $db = get_db();
   $family_members = $db->prepare("SELECT * FROM w5_family_members");
   $family_members->execute();
   while ($fRow = $family_members->fetch(PDO::FETCH_ASSOC))
   {
      $first_name = $fRow["first_name"];
      $last_name = $fRow["last_name"];
      $relationship_id = $fRow["relationship_id"];
      $relationships = $db->prepare("SELECT description FROM w5_relationships WHERE id = $relationship_id");
      $relationships->execute();
      while ($rRow = $relationships->fetch(PDO::FETCH_ASSOC))
      {
         $relationship = $rRow["description"];
      }
      echo "<p>$first_name $last_name is my $relationship ($relationship_id)</p>";
   }




   $client_contact = $db->prepare("SELECT * FROM client_contact");
   $client_contact->execute();
   while ($cRow = $client_contact->fetch(PDO::FETCH_ASSOC))
   {
      $email = $cRow["email"];
      $phone_number = $cRow["phone_number"];
      echo "<p> Contact: $phone_number <br> $email</p>";
   }

   $client_check_in = $db->prepare("SELECT * FROM client_check_in");
   $client_check_in->execute();
   while ($iRow = $client_check_in->fetch(PDO::FETCH_ASSOC))
   {
      $check_in_date = $iRow["check_in_date "];
      $check_in_time  = $iRow["check_in_time"];
      echo "<p> Date and time: $check_in_date, $check_in_time</p>";
   }