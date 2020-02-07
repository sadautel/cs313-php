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

    $confirm =  $_POST["confirm"];
    $confirm = false;

    if($confirm == TRUE){
        echo "Thank you for signing in!"
    }
    
    $owner = $_POST["owner"];
    $owner = false;
    if($owner == TRUE){
        ?>
        <form action="index.php" method="POST">
        First name:    <input type="text"><br>
        Last name:     <input type="text"><br>

        Password:      <input type="text"><br>
        <input type="submit" id="sbt" value="Submit" />
        </form>
        <?php
    }
    ?>
</body>
</html>

