<?php
   require "dbConnect.php";
   $db = get_db();
   $client_name = $db->prepare("SELECT * FROM client");
   $client_name->execute();
  echo "hello";
?>


