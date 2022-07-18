<?php include '../database/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Register</title>
</head>
<body>
    <div class="register">
        <h2>Register</h2>
        <form action="./add-user.php" method="POST">
            <input type="text" name="name" placeholder="Name" value="<?=$_SESSION['name']?>">
            <input type="email" name="email" placeholder="Email" value="<?=$_SESSION['email']?>">
            <input type="password" name="password" placeholder="Password" value="<?=$_SESSION['password']?>">
            <input type="confirm_password" name="confirm_password" placeholder="Confirm password">
            <button type="submit">Create</button>
            <div>
                <?php if (isset($_GET['err']) && $_GET['err'] == 0): ?>  
                    <p>The passwords doesn't match</p>
                <?php endif ?>
            </div>    
        </form>
    </div>
    <a href="../index.php"><button><img src="../icons/back.png"></button></a>
</body>
</html>