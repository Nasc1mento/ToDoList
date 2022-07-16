<?php include './database/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php if (isset($_GET['err']) && $_GET['err'] == 0): ?>  
        <p>The passowords doesn't match</p>
    <?php endif ?>
    <form action="./add-user.php" method="POST">
        <input type="text" name="name" placeholder="Name" value=<?=$_SESSION['name']?>>
        <input type="email" name="email" placeholder="Email" value=<?=$_SESSION['email']?>>
        <input type="password" name="password" placeholder="Password">
        <input type="confirm_password" name="confirm_password" placeholder="Confirm password">
        <button type="submit">Send</button>
    </form>
</body>
</html>