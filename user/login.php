<?php

    include '../database/config.php';

  
    $email = $_POST['email'];
    $password = $_POST['password'];

    $ret = $pdo -> prepare('SELECT * FROM TDL_USERS');
    $ret -> execute();
    $users = $ret -> fetchAll();

    

    foreach ($users as $user){
        if($email == $user['USR_EMAIL']  && $password == $user['USR_PASSWORD']){
            $_SESSION['email'] = $user['USR_EMAIL'];
            $_SESSION['name'] = $user['USR_NAME'];
            $_SESSION['usr_id'] = $user['USR_ID'];
            
        } 
    }
    
    header('location: /home.php');