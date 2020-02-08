<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>

<?php

require "dbConnect.php";
$db = get_db();
$valueToSearch = $_POST['valueToSearch'];
$search = $db->prepare("SELECT *  client_info WHERE first_name = $valueToSearch ");
$search->execute();
while ($row = $search->fetch(PDO::FETCH_ASSOC))
{
   echo = $row["first_name"];
   echo = $row["last_name"];
}

?>    
</body>
</html>


