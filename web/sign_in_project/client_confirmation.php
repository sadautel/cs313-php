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

    if($confirm == true){
        echo "Thank you for signing in!"
    }

    ?>
</body>
</html>
