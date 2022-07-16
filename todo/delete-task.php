<?php

    include '../database/config.php';

    $id_task = $_GET['id_task'];
    
    $ret = $pdo -> prepare("DELETE FROM TDL_ITENS WHERE ITS_ID = :id_task");
    $ret -> bindValue(':id_task',$id_task);
    $ret -> execute();

    header('location:./index.php');