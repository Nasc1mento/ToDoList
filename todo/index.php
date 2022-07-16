
<?php  

    include '../database/config.php';

    $ret = $pdo -> prepare('SELECT * FROM TDL_ITENS');
    $ret -> execute();
    $data = $ret -> fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODOLIST</title>
</head>
<body>
    <h1>Hello <?=$_SESSION['name']?></h1>
    <a href="../user/logout.php">Sair</a>
</body>
</html>