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
$result = $search;

if ($result)
 {
  while($row = db($result))
 {

?>
<table>
<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>
<tr>
<td><?php echo $row["f_name"]; ?></td>
<td><?php echo $row["l_name"]; ?></td>
</tr>
</table>
    
</body>
</html>


