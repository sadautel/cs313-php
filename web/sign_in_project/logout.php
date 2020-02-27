<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Logged Out</title>
</head>
<body>
<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'You have logged out';
   header('Refresh: 2; URL = client_sign_in.php');
?>
<br>
<a href = "client_sign_in.php">Client Sign In</a><br>
</body>
</html>