<?php

    session_start();

    if(!isset($_SESSION['email'])){
        header('location: index.php?err=0');
        exit();
    }

    header('location: ./todo/');

