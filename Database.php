<?php
include_once "index.php";

    $Host = 'localhost';
    $dbname = 'update';
    $username = 'postgres';
    $password = 'imad';

    try {
        $pgconn = new PDO("pgsql:host=$Host;dbname=$dbname", $username, $password);
    } catch(PDOException $e) {  
    }
?>