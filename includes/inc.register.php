<?php
session_start();
require_once "../includes/dbh.inc.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $full_name = $_POST["fullname"];
    $number = $_POST["phone"];

     if (empty($username) || empty($pwd) || empty($full_name) || empty($number)){
        header("Location: ../pages/register.php");
        exit;
    }  

    try {

        // insert data using non-name method 
        $query = "INSERT INTO users (username, pwd) VALUES (?, ?);";
        $query2 = "INSERT INTO credentials (fullname, Phone_number, user_id) VALUES (?, ?, ?);";
        $query3 = "INSERT INTO balance (user_balance, user_id) VALUES (?, ?);";


        $stmt = $pdo->prepare($query);
        $stmt2 = $pdo->prepare($query2);
        $stmt3 = $pdo->prepare($query3);

        //hashing pasword before going into database
        $options = [
            'cost' => 12
        ];

        $hashedPass = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stmt->execute([$username, $hashedPass]);
        $user_id = $pdo->lastInsertId();
        $stmt2->execute([$full_name, $number, $user_id]);
        $stmt3->execute([0.00, $user_id]);

        // making database close
        $pdo = null;
        $stmt = null;
        $stmt2 = null;
        $stmt3 = null;

        header("Location: ../pages/admin_approval.php");

        // if walang connection exit is most suitable for closing database if my connection die is the one
        die();
    } catch (\PDOException $e) {
        echo "failed to send in database". $e->getMessage();
    }
}else{
    header("Location: ../pages/inc.register.php");
}