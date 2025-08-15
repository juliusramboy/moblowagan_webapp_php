<?php

session_start();
require_once "../includes/dbh.inc.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){
   $username = $_POST["username"];
   $pwd = $_POST["password"];

    if (empty($username) || empty($pwd)) {
        header("Location: ../index.php");
        exit;
    }   

   try {

    //1. query to match the username
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([ $username]);

        $user = $stmt->fetch();
    //2. match the password if match 
        if($user && password_verify($pwd, $user['pwd'])){
            $_SESSION['user_id'] = $user['id']; //save user id in session

             if (!$user['have_access']) {
                //echo "Access denied. You don't have permission to log in.";
                 header("Location: ../pages/admin_approval.php");
                exit;
            }

            header("Location: ../pages/dashboard.php");
        }else{
            echo "Incorrect email or password.";
        }

   } catch (\PDOException $e) {
        echo "failed to send in database". $e->getMessage();
   }

   
}else{
    header("Location: ../index.php");
    exit;
}


