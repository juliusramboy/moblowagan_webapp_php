<?php

// connection using PDO
$dsn = "mysql:host=localhost;dbname=ipayaman";
$dbusername = "root";
$dbpassword = "";


try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "the database is not connected" . $e ->getMessage();
}

