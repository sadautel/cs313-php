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


       function getTime()
       {
        date("Y/m/d") . "<br>";
        date_default_timezone_set("America/Denver");
        date("h:i:sa");
       };   

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$time_in = $_POST['time_in'];
$time_in = getTime();

try
{
	$query = 'INSERT INTO client_info (first_name, last_name, email, phone_number, time_in) VALUES (:first, :last, :email, :phone, :time_in)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':time_in', $time_in);
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

