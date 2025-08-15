<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ipayaman</title>
   <link rel="stylesheet" href="/moblowagan_webapp/css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/head.css?v=<?php echo time(); ?>">
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
            <a href="#">
                <button class="btn-sign-in">Sign In</button>
            </a>
              
            <a href="pages/register.php">
                <button class="btn">Register</button>
            </a> 
        </div>
        <form action="includes/login_auth.php" method="post">
            <div class="form">
                <h1 class="title">Welcome Back</h1>
                <h1 class="subtitle">Sign In to your account</h1>

                <div class="frame">
                    <div class="input-box">
                        <h1 class="label">Email</h1>
                        <input type="text" class="login-input" placeholder="Enter your email" id="email" name="username">
                    </div>
                    <div class="input-box">
                        <h1 class="label">Password</h1>
                        <input type="password" class="login-input" placeholder="Enter your password" id="password" name="password">
                    </div>
        
                    <div class="remember-box">
                        <div class="left-group">
                        <input type="checkbox" />
                        <label class="remember">Remember Me</label>
                        </div>
                        <a class="forgot-password" href="#">Forgot Password?</a>
                    </div>

        
                    <button class="sign-in" button id="loginBtn" type="submit">Sign In</button>

                    <div class="register-box">
                        <h1 class="register-title">Don't have an account?</h1>
                        <a class="register-link" href="pages/register.php">Register</a>
                    </div>
                </div>

                </div>
            </form>
        <footer>
        <div class="footer-box">
            <h2 class="footer-title">Bank-grade Security</h2>
            <h2 class="footer-subtitle">256-bit encryption</h2>
        </div>
      </footer>
       </div>
    </div>
</body>
</html>