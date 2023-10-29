<?php

    try {
        //host
        define("HOST", "localhost");

        //dbname
        define("DBNAME", "coffeefy");

        //user
        define("USER", "root");

        //password
        define("PASS", "");

        $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . "", USER, PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $Exception) {

        echo $Exception->getMessage();
    }
?>