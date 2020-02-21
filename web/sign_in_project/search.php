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
$search = $db->prepare("SELECT * FROM client_info WHERE first_name = :value");
$statement->bindValue(':value', $valueToSearch);
$search->execute();
while ($row = $search->fetch(PDO::FETCH_ASSOC))
{
    $id = $row['id'];
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


