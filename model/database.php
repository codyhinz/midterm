<?php 

    $dsn = 'mysql:host=localhost;dbname=zippysusedautos';
    $username = 'root';

    try {
        $db = new PDO($dsn, $username);
    } catch(PDOException $e) {
        echo $e;
    }