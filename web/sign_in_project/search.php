<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Search Results</title>
</head>
<body>
<header>
<a href="logout.php" title = "Logout">Logout</a><br>
<a href="./owner_login">Back</a><br>
</header>
<?php

require "dbConnect.php";
$db = get_db();
$valueToSearch = $_POST['valueToSearch'];
$statement = $db->prepare('SELECT * FROM client_info WHERE first_name = :personId');
$statement->bindValue(':personId', $valueToSearch);
$statement->execute();
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
   $id      = $row['id'];
   $first_name = $row["first_name"];
   $last_name = $row["last_name"];
   $email = $row["email"];
   $phone_number = $row["phone_number"];
   $client_date = $row["client_date"];
   echo "<br>$first_name $last_name<br> 
         $email <br>
         $phone_number <br> 
         $client_date  <br><br>";
}
?>
</body>
</html>


