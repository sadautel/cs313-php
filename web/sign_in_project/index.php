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
   <title>Client Info</title>
</head>
<body>

<header>
<br>
<h1>Thank you for signing in!</h1>
<form action="owner.php" method="POST" >
<input type="submit" name="search" value="Owner Login">
</form>
<br>
</header>

<?php

   require "dbConnect.php";
   $db = get_db();
   $personId = $_GET['personId'];
   $statement = $db->prepare('SELECT * FROM client_info');
   // $statement->bindValue(':personId', $personId);
   $statement->execute();
   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
      $id = $row['id'];
      $first_name = $row["first_name"];
      $last_name = $row["last_name"];
      $email = $row["email"];
      $phone_number = $row["phone_number"];
      $client_date = $row["client_date"];
}   
echo "<p> $first_name  $last_name <br> 
$phone_number <br> $email <br> $client_date</p>";
?>
</body>
</html>



