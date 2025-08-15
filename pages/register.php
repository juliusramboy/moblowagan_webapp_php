<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ipayaman_register</title>
    <link rel="stylesheet" href="/moblowagan_webapp/css/header.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/head.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="/moblowagan_webapp/images/paluwagan_logo.png" alt="IPAYAMAN Logo">
            <h3>IPAYAMAN</h3>
        </div>
    </nav>

    <div class="wrapper">
       <div>
        <div class="navigator">
            <a href="../index.php">
                <button class="btn">Sign In</button>
            </a>
              
            <a href="#">
                <button class="btn-sign-in">Register</button>
            </a> 
        </div>
        
        
            <div class="form">
                <h1 class="title">Create Account</h1>
                <h2 class="subtitle">Join <b><I>IPAYAMAN</I></b> for secure banking experience</h2>

        <form action="../includes/inc.register.php" method="post">
                <div class="frame">
                    <div class="create_input-box">
                        <h1 class="Create_label">Full Name</h1>
                        <input type="text" class="Create_login-input" placeholder="Enter your full name" name="fullname">
                    </div>

                    <div class="create_input-box">
                        <h1 class="Create_label">Email</h1>
                        <input type="text" class="Create_login-input" placeholder="Enter your email" name="username">
                    </div>

                    <div class="create_input-box">
                        <h1 class="Create_label">Phone Number</h1>
                        <input type="text" class="Create_login-input" placeholder="Enter your phone number" name="phone">
                    </div>

                    <div class="create_input-box">
                        <h1 class="Create_label">Password</h1>
                        <input type="password" class="Create_login-input" placeholder="Enter your password" name="password">
                    </div>

                    <div class="create_input-box">
                        <h1 class="Create_label">Confirm Password</h1>
                        <input type="password" class="Create_login-input" placeholder="Re-enter your password" name="repassword">
                    </div>

                    <div class="remember-box">
                        <div class="left-group">
                        <input type="checkbox" />
                        <label class="privacy_remember">Ako ay sumasali sa paluwagan na ito.</label>
                        </div>
                    </div>

        
                    <button class="create_sign-in" type="submit">Register Account</button>

                    <div class="register-box">
                        <h1 class="register-title">Already have an account?</h1>
                        <a class="register-link" href="../index.php">Sign In</a>
                    </div>
                </div>
            </div>
        </form>

       </div>
    </div>
    
</body>
</html>