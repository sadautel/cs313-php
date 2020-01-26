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
        ?>
        <form action="week03_b.php" method="POST">
        <div>
          <p>Please enter your shipping address</p>
          <label for="address">Address:</label>
          <textarea name="address" id="address" placeholder="Street address, city, state, and zip" required>
        </textarea>
        </div>
        <input type="submit" name="confirm" id="cfm" value="Submit Order" />
        <input type="submit" name="cancel" id="cnl" value="Cancel Order" />
        <a href="week03.html">
        <button type="button"> Edit Order</button>
        </a>
    </form>    
    <?php
    }

?>
</body>
</html>





