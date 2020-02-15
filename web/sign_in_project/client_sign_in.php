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
<?php
	require("dbConnect.php");
	$db = get_db();
?>
<body>
<form action="client_confirmation.php" method="POST">
        First name:    <input type="text" name="first_name"><br>
        Last name:     <input type="text" name="first_name"><br>
        <div>
        Email:  <input type="text" name="email"><br>
        Phone:  <input type="text" name="phone"><br>
        </div>
        <br><br>
                  <select id="client_input" class="form-control" name="client_input">
                     <?php
                        $statement = $db->prepare("SELECT * FROM clinet_info");
                        $statement->execute();
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                        {
                           $id   = $row['id'];
                           $ $first_name = $row["first_name"];
                           $last_name = $row["last_name"];
                           $email = $row["email"];
                           $phone_number = $row["phone_number"];
                        }
                     ?>
                  </select>
         <button type="submit" name="confirm" id="cfm">Sign in</button>
         <button type="submit" name="owner" id="owner" >Owner</button>
      </form>
</body>
</html>