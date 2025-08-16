<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/profile.css?v=<?php echo time(); ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        require_once __DIR__ . '/../includes/nav.php';
    ?>

    <div class="wrapper">
        <h1 class="title">Profile Information</h1>
        <h1 class="subtitle">Manage your personal information and settings</h1>

        <div class="box-holder">
            <div class="profile-card">
                <div class="image">
                    <img class="pfp" src="" alt="">
                    <h1 class="txt">Change Photo</h1>
                </div>
                <div class="verified-box">
                    <div class="verified">
                        <img class="icon" src="../images/verified_icon.png" alt="Verified"> 
                        <h1 class="txt">Verified Account</h1>
                    </div>
                    <h2 class="subtxt"> Date verified 10/11/2023</h2>
                </div>

               <div class="links">
                    <div class="clickable">
                        <img class="icon" src="../images/lock.png" alt="Verified"> 
                        <button class="link-btn" onclick="openPopup('lock')">Change Password</button>
                    </div>
                    <div class="clickable">
                        <img class="icon" src="../images/security.png" alt="Verified"> 
                        <button class="link-btn" onclick="openPopup('security')">Security Settings</button>
                    </div>
                    <div class="clickable">
                        <img class="icon" src="../images/notification.png" alt="Verified"> 
                        <button class="link-btn" onclick="openPopup('notification')">Notification Preferences</button>
                    </div>
                </div>

            </div>
            <div class="profile-info">
            </div>

        </div>
    </div>
</body>
</html>