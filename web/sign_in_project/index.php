<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
   <title>Document</title>
</head>
<body>
<?php
   require "dbConnect.php";
   $db = get_db();
  foreach ($db->query('SELECT * FROM client_info') as $row)
{
   $first_name = $row["first_name"];
   $last_name = $row["last_name"];
   $email = $row["email"];
   $phone_number = $row["phone_number"];

   echo "<p> Client: $first_name  $last_name <br> 
                     $phone_number <br> $email</p>";
}   
   ?>
</body>
</html>



