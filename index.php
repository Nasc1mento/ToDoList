
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
</head>
<body>
<?php if (isset($_GET['err']) && $_GET['err'] == 0): ?>  
        <p>User not registered</p>
<?php endif ?>
    <form action="./user/login.php" method="POST">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>

    <p>Not registered?<a href="./user/register.php">Create an account</a></p>
</body>
</html>