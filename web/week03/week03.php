<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="veiwpoint" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="style.css">
    <style>
       label{
          color: white;
       }

       form {
        margin-left: 40%;
        margin-right: 30%;
       }

       link{
           text-align: center;
       }

       li{
           margin-left: 30%;
       }
    </style>
</head>

<body>
<header>
<h1>
    Your Cart
    <hr>
</h1>
</header>
<form action="week03_a.php" method="POST">
<br><label>Selected Items:</label>
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
<br>
<input type="submit" name="confirm" id="cfm" value="Continue Order"/>
<a href="week03.html">
<button type="button"> Edit Order</button>
</a>
</form>


</body>
</html>





