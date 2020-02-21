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

<?php

require "dbConnect.php";
$db = get_db();
$valueToSearch = $_POST['valueToSearch'];
echo $valueToSearch;
// $search = $db->prepare('SELECT * FROM client_info WHERE first_name = :value');
// $statement->bindValue(':value', $valueToSearch);
// $search->execute();
// echo "SELECT * FROM client_info WHERE first_name = \'$valueToSearch\'";
// while ($row = $search->fetch(PDO::FETCH_ASSOC))
// {
//     $id = $row['id'];
//     $first_name = $row["first_name"];
//     $last_name = $row["last_name"];
//     $email = $row["email"];
//     $phone_number = $row["phone_number"];

//  echo "<p> Client: $first_name  $last_name <br> 
//                    $phone_number <br> $email</p>";

// }

$personId = 1;
$statement = $db->prepare('SELECT * FROM w6_user WHERE Id = :personId');
$statement->bindValue(':personId', $personId);
$statement->execute();
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
   $id      = $row['id'];
   $first   = $row['first_name'];
   $last    = $row['last_name'];
   $food_id = $row['food_type'];

   $foods = $db->prepare("SELECT food FROM w6_food WHERE ID = $food_id");
   $foods->execute();
   while ($fRow = $foods->fetch(PDO::FETCH_ASSOC))
   {
      $food = $fRow['food'];
   }
   echo "<h1>$first $last's favorite food is $food</h1>";
}


?>
</body>
</html>


