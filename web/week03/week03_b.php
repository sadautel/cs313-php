<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="veiwpoint" content="width=device-width, initial-scale=1.0">
    <title>Order Information</title>
    <link rel="stylesheet" href="style.css">
    <style>
    body{
        text-align: center;
    }
    </style>
</head>

<body>
<header>
<h1>
    Order Information
    <hr>
</h1>
</header>


<?php 
    $confirm =  $_POST["confirm"];
    $confirm = false;
    if($confirm = true){
        $strAdd = $_POST["streetaddress"];
        echo $strAdd; 
        $city = $_POST["city"];
        echo $city; 
        $state = $_POST["state"];
        echo $state;
        $zip = $_POST["zipcode"];
        echo $zip;
    }
?>
</body>
</html>





