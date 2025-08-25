<?php

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION["user_id"];
    // echo $user_id;

    $cred = $pdo->prepare("SELECT fullname, address, Phone_number, DATE(created_at) AS created_at FROM credentials WHERE user_id = ?");

    $cred->execute([$user_id]);
    $info = $cred->fetch(PDO::FETCH_ASSOC);


    $email = $pdo->prepare("SELECT username FROM users WHERE id =?");
    $email->execute([$user_id]);
    $info_email = $email->fetch(PDO::FETCH_ASSOC);
}
else{
    header("Location: login.php");
    exit;   
}