<?php

    include '../database/config.php';


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];



    if ($password == $confirm_password) {
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);


        $ret = $pdo -> prepare("INSERT INTO TDL_USERS (USR_NAME, USR_EMAIL, USR_PASSWORD) VALUES (?, ?, ?)");
        $ret->bindParam(1, $name);
        $ret->bindParam(2, $email);
        $ret->bindParam(3, $password);
        $ret->execute();

        header('location: ../index.php');

    }else {
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header('location: ./register.php?err=0');
    }


