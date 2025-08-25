<?php
    require_once "../includes/dbh.inc.php";

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION["user_id"];
        // echo "Session ID: " . $user_id;

        $userStmt = $pdo->prepare("SELECT username FROM users WHERE id = ?");
        $userStmt->execute([$user_id]);
        $user = $userStmt->fetch(PDO::FETCH_ASSOC);

        $userStmt2 = $pdo->prepare("SELECT DATE(created_at) AS created_at FROM credentials WHERE user_id = ?");
        $userStmt2->execute([$user_id]);
        $created_at = $userStmt2->fetch(PDO::FETCH_ASSOC);

    }else{
        echo "no user id in session stored";
    }
