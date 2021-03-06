<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign in</title>
</head>
<body>
<?php
require("dbConnect.php");
$db = get_db();

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$client_date = $_POST['client_date'];

try
{
	$query = 'INSERT INTO client_info (first_name, last_name, email, phone_number, client_date) VALUES (:first, :last, :email, :phone, :client_date)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':client_date', $client_date);
	$statement->execute();
	
    $userId = $db->lastInsertId("client_info_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: index.php?personId=$userId");

die();
?>
</body>
</html>

<?php

