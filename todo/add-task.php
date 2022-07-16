<?php

    include '../database/config.php';

    $name = $_POST['name'];
    $usr_id = $_SESSION['usr_id'];
     
    

    $ret = $pdo -> prepare("INSERT INTO TDL_ITENS (ITS_NAME, ITS_USR_ID) VALUES (?, ?)");
    $ret -> bindParam(1, $name);
    $ret -> bindParam(2, $usr_id);
    $ret -> execute();



    header('location: ./index.php');









