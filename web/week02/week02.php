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
        echo "Today is " . date("Y/m/d") . "<br>";
        date_default_timezone_set("America/Denver");
        echo "The time is " . date("h:i:sa");
       };   
?>
</body>
</html>