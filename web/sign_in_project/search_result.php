<?php

require "dbConnect.php";
$db = get_db();
$valueToSearch = $_POST['valueToSearch'];

$db = "SELECT * FROM user WHERE f_name=$valueToSearch ";
$result = $db;

?>

<?php

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

<?php
 }
} 
?>
</table>