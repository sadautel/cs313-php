<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="veiwpoint" content="width=device-width, initial-scale=1.0">
    <title>Assignment 12</title>
    <link rel="stylesheet" href="style.css">
<style>
    form{
        margin-left: 33%;
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
        ?>
        <form action="week03_b.php" method="POST">
        <div>
          <p>Please enter your shipping address</p>
          <label for="address">Street Address:</label>
          <input type="text" name="streetaddress"><br>
          <label for="address">Street Name:</label>
          <input type="text" name="streetname"><br>
          <label for="address">City:</label>
          <input type="text" name="city"><br>
          <label for="address">State:</label>
          <input type="text" name="state"><br>
          <label for="address">Zipcode:</label>
          <input type="text" name="zipcode">
        </div>
        <input type="submit" name="confirm" id="cfm" value="Submit Order" />
        <a href="week03.html">
        <button type="button"> Edit Order</button>
        </a>
    </form>    
    <?php
    }

?>
</body>
</html>





