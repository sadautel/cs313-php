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
          <label for="address">Street Address:</label>
          <input type="text" name="streetaddress"><br>
          <label for="address">City:</label>
          <input type="text" name="city"><br>
          <label for="address">State:</label>
          <input type="text" name="state"><br>
          <label for="address">Zipcode:</label>
          <input type="text" name="zipcode">
        </div>
        <?php
        $pItems = $_POST['item'];

        foreach($pItems as $selected)
        {
            if($selected == 5.00)
            { 
                ?><li><?php
                echo "Crinkley Plush $";
                ?><?php echo $selected;?><?php
                ?></li><?php
            }
            if($selected == 5.50)
            {
                ?><li><?php
                echo "Ropes $";
                ?><?php echo $selected;?><?php
                ?></li><?php
            }
            if($selected == 3.50)
            {
                ?><li><?php
                echo "Balls $";
                ?><?php echo $selected;?><?php
                ?></li><?php
            }
            if($selected == 6.00)
            {
                ?><li><?php
                echo "Teething Chew $";
                ?><?php echo $selected;?><?php
                ?></li><?php
            }
            if($selected == 4.00)
            {
                ?><li><?php
                echo "Chewy $";
                ?><?php echo $selected;?><?php
                ?></li><?php
            }
            if($selected == 4.50)
            {
                ?><li><?php
                echo "Kong $";
                ?><?php echo $selected;?><?php
                ?></li><?php
            }
            if($selected == 2.50)
            {
                ?><li><?php
                echo "Squeaky Bones $";
                ?><?php echo $selected;?><?php
                ?></li><?php
            }
            if($selected == 2.00)
            {
                ?><li><?php
                echo "Plushy $";
                ?><?php echo $selected;?><?php
                ?></li><?php
            }
            if($selected == 3.00)
            {
                ?><li><?php
                echo "Squeaky Plushes $";
                ?><?php echo $selected;?><?php
                ?></li><?php
            }
        }
        
        ?>
        <br><label>Purchase total:</label>
        <?php 
        echo " $";
        echo $_POST["total"]
        ?>
        <input type="submit" name="confirm" id="cfm" value="Complete Purchase" />
        <a href="week03.html">
        <button type="button"> Edit Order</button>
        </a>
    </form>    
    <?php
    }
?>
</body>
</html>





