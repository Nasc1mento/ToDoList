<?php

    include '../database/config.php';

    $name = $_POST['name'];
    $usr_id = $_SESSION['usr_id'];
    $id_task = $_POST['id_task'];

    $ret = $pdo -> prepare("UPDATE TDL_ITENS SET ITS_NAME = :name, ITS_USR_ID = :usr_id WHERE  ITS_ID = :id_task");
    $ret -> bindValue(':name', $name);
    $ret -> bindValue(':usr_id', $usr_id);
    $ret -> bindValue(':id_task', $id_task);
    $ret -> execute();

    header('location:./index.php');
