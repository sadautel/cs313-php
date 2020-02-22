<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign in</title>
</head>
<body>
<header>
        <h1>
            Please Select One
        </h1>
    </header>
<form action="who_direct.php" method="POST">
       <input type="radio" name="title" value="owner" checked> Owner<br>
       <input type="radio" name="title" value="client"> Client<br>
        <br><br>
        <input type="submit" name="confirm" id="cfm" value="Submit" />
      </form>
</body>
</html>