
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
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="add-task">
        <h1>TODO LIST</h1>
        <fieldset>
            <legend>Add task</legend>
                <form action="add-task.php" method="POST">
                    <input type="text" name="name" placeholder="Name">
                    <button type="submit"><img src="../icons/add.svg"></button>
                </form>
        </fieldset>
    </div>

        <table>
            <?php foreach ($data as $row) :?>
                <tr>
                    <?php if ($_SESSION['usr_id'] == $row['ITS_USR_ID']):?>
                        <td><?= $row['ITS_NAME']?></td>
                        <td><a href="./edit-task.php?id_task=<?=$row['ITS_ID']?>"><button><img src="../icons/edit.svg" alt="edit"></button></a></td>
                        <td><a href="./delete-task.php?id_task=<?=$row['ITS_ID']?>" class="delete-button"><button><img src="../icons/delete.svg" alt="delete"></button></a></td>
                    <?php endif ?>
                </tr>   
            <?php endforeach ?>
            <div class="logout-button">
                <a href="../user/logout.php"><button><img src="../icons/logout.svg" alt="logout"></button></a>
            </div>
    </table>
    
</body>
</html>