<?php

    include '../database/config.php';

    $id_task = $_GET['id_task'];

    $ret = $pdo -> prepare("SELECT * FROM TDL_ITENS WHERE ITS_ID = :id_task");
    $ret -> bindValue(':id_task', $id_task);
    $ret -> execute();
    $data = $ret -> fetchAll();

    foreach ($data as $row){
        $name = $row['ITS_NAME'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Edit Task</title>
</head>
<body>
    
    <div class="edit-task">
    <h1>TODO LIST</h1>
        <fieldset>
            <legend>Edit task</legend> 
            <form action="./update-task.php" method="POST">
                <input type="text" name="name" value='<?=$name?>'>
                <input type="hidden" name="id_task" value=<?=$id_task?>>
                <button type="submit"><img src="../icons/upgrade.svg"></button>
            </form>
        </fieldset>
    </div>
    <a href="./index.php"><button><img src="../icons/back.png"></button></a>
</body>
</html>





    

   
    