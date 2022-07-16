<?php

    session_start();

    $host ='127.0.0.1';
    $dbname ='TO_DO_LIST';
    $port = '3306';
    $user = 'root';
    $password = '@drfla0005';


    $dsn = "mysql:host = $host; dbname = $dbname; port = $port";
    $pdo = new PDO($dsn, $user, $password);