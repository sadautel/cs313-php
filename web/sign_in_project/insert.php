<?php
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO client_info (first_name, last_name, email, phone_number) VALUES (:first, :last, :email, :phone)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first', $first);
	$statement->bindValue(':last', $last);
   $statement->bindValue(':email', $email);
   $statement->bindValue(':phone', $phone);
	$statement->execute();
	
	// SELECT c.relname FROM pg_class c WHERE c.relkind = 'S';   -- display all sequences
	// get id of last inserted row - save in $userId
	$userId = $db->lastInsertId("client_info_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: index.php");

die();
?>