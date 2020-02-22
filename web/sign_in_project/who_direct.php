<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$title = $POST_['title'];
if($title = 'client'){
    header("Location: client_sign_in.php"); 
}
elseif($title = 'owner'){
    header("Location: owner.php");
}
?>
</body>
</html>