
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
<div class="login">
    <h2>Login</h2>
    <form action="./user/login.php" method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>

    </form>
    <p>Not registered?&nbsp;<a href="./user/register.php">Create an account</a></p>
    <div>
        <?php if (isset($_GET['err']) && $_GET['err'] == 0): ?>  
            <p>User not registered</p>
        <?php endif ?>
    </div>
</div>

    
</body>
</html>