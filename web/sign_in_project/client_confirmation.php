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
     $owner =  $_POST["owner"];
     $owner = false; 
    if($owner = true){
        ?>
        <form action="index.php">
            <input type="text">
        </form>
        <?php
    }
    else{
        echo "Thank you for signing in!";
    }

    ?>
</body>
</html>

