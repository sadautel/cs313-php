<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$client = $POST_['client'];
$owner = $POST_['owner'];

$client = false;
$owner = false;

if($client = true){
    header("Location: client_sign_in.php"); 
}
if($owner = true){
    header("Location: owner.php");
}
?>
</body>
</html>