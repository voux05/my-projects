<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/loginpage/sign-in.css">
</head>

<body>
    <video id="background" autoplay muted loop>
        <source src="assets/videos/bg.webm">
    </video>
    <div class="container">
        <div class="title">
            <h1>SIGN IN ON <strong>RESERVENTURE</strong></h1>
        </div>
        <div class="form">
             <!-- <img class="email-icon" src="assets/icons/email.png" alt=""> -->
             <img class="user-icon" src="assets/icons/user.png" alt="">
             <img class="pass-icon" src="assets/icons/lock.png" alt="">

            <!-- <input type="text" required> -->
            <!-- <label for="" class="email-label">Email</label> -->
            <input type="text" id='username' required>
            <label for="" class="username-label">Username</label>
            <input type="password" id='password' maxlength="8 src="assets/js/loginpage/show-password.js" required>
            <label for="" class="password-label">Password</label>
            <button id="sign-in-button">Sign In</button>

            <div class="other-options">
                <div class="forgot-password">
                    <label for=""><a href="forgot-password.html">Forgot Password?</a></label>
                </div>
                <div class="create-account">
                    <label for=""><a href="create-account.php">Create Account</a></label>
                </div>
            </div>
        </div>
    </div>
    <script src='assets/js/loginpage/validation.js'></script>
</body>
</html>