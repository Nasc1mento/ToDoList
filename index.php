
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
    <h1>Login</h1>
    <form action="./user/login.php" method="POST">
        <div>
            <input type="email" name="email" placeholder="Email">
        </div>

        <div>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
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