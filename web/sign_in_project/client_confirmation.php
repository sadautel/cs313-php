<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php

   //need to send info 

    $owner =  $_POST["owner"];
    $owner = false;
    if($owner = true){
        ?>
       <header>
        <h1>
            Please Sign in
        </h1>
    </header>
        <form action="index.php">
            First name: <input type="text"><br>
            Last name: <input type="text"><br>

            Password: <input type="text"><br><br>

            <input type="submit" name="owner" id="owner" value="Owner" />
        </form>
        <?php
    }
    ?>
</body>
</html>

