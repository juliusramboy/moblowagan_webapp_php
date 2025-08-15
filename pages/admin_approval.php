<?php
    session_start();
    require_once "../includes/dbh.inc.php";

    $userId = $_SESSION['user_id'];
    //echo "Session ID: " . $userId;

    $userStmt = $pdo->prepare("SELECT username FROM users WHERE id = ?");
    $userStmt->execute([$userId]);
    $user = $userStmt->fetch();

    $userStmt2 = $pdo->prepare("SELECT created_at FROM credentials WHERE user_id = ?");
    $userStmt2->execute([$userId]);
    $created_at = $userStmt2->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="/moblowagan_webapp/css/header.css">
    <link rel="stylesheet" href="../css/admin_approval.css">
</head>

<body>
    <!-- <header class="header-main">
        <div class="header-main-logo">
            <img src="../images/paluwagan_logo.png" alt="LOGO" class="logo-inline">
            <h1>IPAYAMAN</h1>
        </div>
    </header> -->
    <nav>
  <div class="logo">
    <img src="/moblowagan_webapp/images/paluwagan_logo.png" alt="IPAYAMAN Logo">
    <h3>IPAYAMAN</h3>
  </div>
  <div class="hamburger">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
  </div>
  <ul class="nav-links">
    <li><a class="nav-cta-button" href="/moblowagan_webapp/includes/logout.php">Logout</a></li>  
  </ul>
</nav>


   <div class="container">
        <div class="image_container">
            <img src="../images/timer_pic.png" alt="Timer" style="width: 100%; height: 100%;">
        </div>
        <div class="text">
            <h1>Waiting for Admin Approval</h1>
            <h2>Your account is currently under review. Our admin team will <br>verify your information and activate your account soon. <br>This usually takes 15–30 minutes.</h2>
        </div>

        <div class="account_stats">
            <div class="message-box">
                <h1>Account Status</h1>
                <h2>Pending Review</h2>
             </div>
            <div class="message-box">
                <h1>Application ID</h1>
                <h2>#PTG-<?php echo"$userId" ?></h2>
            </div>
            <div class="message-box">
                <h1>Estimated Review Time</h1>
                <h2>30 minutes</h2>
            </div>
            <div class="message-box">
                <h1>Submission Date</h1>
                <h2> <?php echo"$created_at[created_at]"?> </h2>
            </div>
        </div>
    </div>

</body>
<script src="/moblowagan_webapp/script/navigation.js"></script>
</html>