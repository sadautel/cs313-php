<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Sign in</title>
</head>
<body>
    <header>
        <h1>
            Please Sign in
        </h1>
    </header>
<body>
<form action="client_confirmation.php" method="POST">
        First name:    <input type="text" name="first_name"><br>
        Last name:     <input type="text" name="first_name"><br>
        <div>
        Email:  <input type="text" name="email"><br>
        Phone:  <input type="text" name="phone"><br>
        </div>
        <br><br>
        <input type="submit" name="confirm" id="cfm" value="Sign in" />
        <input type="submit" name="owner" id="owner" value="Owner" />
      </form>
</body>
</html>