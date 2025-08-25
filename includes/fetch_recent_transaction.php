<?php

require_once "../includes/dbh.inc.php"; // Make sure this is included

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    // echo $user_id;
    $transacStmt = $pdo->prepare("
        SELECT created_at, description, amount, status
        FROM transac 
        WHERE user_id = ?
        ORDER BY created_at DESC
    ");
    $transacStmt->execute([$user_id]);
    $data = $transacStmt->fetchAll();

    // You can now loop through $transactions to display them
} else {
    header("Location: login.php");
    exit;
}
