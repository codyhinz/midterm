<?php 

    $dsn = 'mysql:host=lyn7gfxo996yjjco.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=e68ad3ljivfy80mn';
    $username = 'm5569wsb8xde1n17';
    $password = 'z8m1avyx39p8l1kf';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch(PDOException $e) {
        echo $e;
    }

        try {
            $db = new PDO($dsn, $username, $password);
        } catch(PDOException $e) {
            echo $e;
        }