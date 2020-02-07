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

    $owner =  $_POST["owner"];
    $owner = false;

    if($confirm = false){
       ?>
        <form action="index.php">
            <input type="text">
        </form>
        <?php
    }
    else
        ?>
        <P> Thank you for signing in!</p>
        <?php
    }

    ?>
</body>
</html>

