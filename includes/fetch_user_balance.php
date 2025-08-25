<?php
require_once "../includes/dbh.inc.php"; // Make sure this is included

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    // echo $user_id;
    $balanceStmt = $pdo->prepare("SELECT user_balance FROM balance  WHERE user_id = ?");
    $balanceStmt->execute([$user_id]);
    $balance = $balanceStmt->fetch(PDO::FETCH_ASSOC);

    // You can now loop through $balance to display them
} else {
    header("Location: login.php");
    exit;
}
