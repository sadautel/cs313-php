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
   $first_name = $row["first_name"];
   $last_name = $row["last_name"];

}

?>
<table>
<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>
<tr>
<td><?php echo $first_name; ?></td>
<td><?php echo $last_name; ?></td>
</tr>
</table>
    
</body>
</html>


