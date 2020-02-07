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

   //need to send info 

    $owner =  $_POST["owner"];
    $owner = false;
    if($owner = true){
        ?>
        <form action="index.php">
            First name: <input type="text">
            Last name: <input type="text">

            <input type="submit" name="owner" id="owner" value="Owner" />
        </form>
        <?php
    }
    ?>
</body>
</html>

