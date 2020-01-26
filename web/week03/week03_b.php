<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="veiwpoint" content="width=device-width, initial-scale=1.0">
    <title>Assignment 12</title>
    <link rel="stylesheet" href="style.css">
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
        $strAdd = htmlspecialchar($_POST["streetaddress"]);
        echo $strAdd; ?> <br><?php
        $city = htmlspecialchar($_POST["city"]);
        echo $city; ?> <p>, </p> <?php
        $state = htmlspecialchar($_POST["state"]);
        echo $state; ?> <p>  </p> <?php
        $zip = htmlspecialchar($_POST["zipcode"]);
        echo $zip;
    }
?>
</body>
</html>





