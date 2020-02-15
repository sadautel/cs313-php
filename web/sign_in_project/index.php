<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
   <style>
      body{
         text-align: center;
      }
   </style>
   <title>Document</title>
</head>
<body>

<header>
<br>
<form action="search_result.php" method="post" >
<input type="text" name="valueToSearch" placeholder="Search Record.."></br>
<input type="submit" name="search" value="Search Record..">
</form>
<br>
</header>

<?php

   require "dbConnect.php";
   $db = get_db();
 
   $statement = $db->prepare('SELECT * FROM clint_info');
   $statement->execute();
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
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



