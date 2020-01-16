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
       getTime();
       function getTime()
       {
        date_default_timezone_set("America/Idaho");
        echo "The time is " . date("h:i:sa");
       };   
?>
</body>
</html>