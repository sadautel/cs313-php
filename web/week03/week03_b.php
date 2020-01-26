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
        $strAdd = $_POST["streetaddress"];
        echo $strAdd; 
        $strName = $_POST["streetname"];
        echo $strName; ?><Br><?php
        $city = $_POST["city"];
        echo $city; . ", " 
        $state = $_POST["state"];
        echo $state;
        $zip = $_POST["zipcode"];
        echo $zip;
    }
  
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

?>
</body>
</html>





