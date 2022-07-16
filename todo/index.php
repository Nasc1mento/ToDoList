
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
    <h1>TODO LIST</h1>
    
    <fieldset>
        <legend>Add task</legend>
            <form action="add-task.php" method="POST">
                <input type="text" name="name" placeholder="Name">
                <button type="submit">Add</button>
            </form>
    </fieldset>
    <table>
        <?php foreach ($data as $row) :?>
            <tr>
                <?php if ($_SESSION['usr_id'] == $row['ITS_USR_ID']):?>
                    <td><?= $row['ITS_NAME']?></td>
                    <td><button type="button"><a href="./edit-task.php?id_task=<?=$row['ITS_ID']?>">Edit</a></button></td>
                    <td><button type="button"><a href="./delete-task.php?id_task=<?=$row['ITS_ID']?>">Delete</a></button></td>
                <?php endif ?>
            </tr>   
        <?php endforeach ?>
    </table>
    <a href="../user/logout.php">Log out</a>
</body>
</html>