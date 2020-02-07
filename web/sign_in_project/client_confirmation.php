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
 
    $confirm =  $_POST["confirm"];
    $confirm = false;    
    if($owner = true){
        ?>
        <form action="index.php">
            <input type="text">
        </form>
        <?php

       if($confirm = true){
       ?>
          <P> Thank you for signing in!</p>
       <?php  
       }
    }

    ?>
</body>
</html>

