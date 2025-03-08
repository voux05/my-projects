<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/loginpage/create-account.css">
</head>
<body>
    <video id="background" autoplay muted loop>
        <source src="assets/videos/bg.webm">
    </video>
    <div class="container">
        <img id="back-icon" src="assets/icons/left-chevron.png" alt="">
        <div class="title">
            <h1>REGISTER ON <strong>RESERVENTURE</strong></h1>
        </div>
            <form action="assets/database/create-account.php" method="post">
            <label >Email Address</label> 
            <input type="text" placeholder="(required)" name=email' id="email"> <img class="email-icon" src="assets/icons/email.png" alt="">
            <label>Username</label>
            <input type="text" placeholder="(required)" name="username" id="username"> <img class="user-icon" src="assets/icons/user.png" alt="">
            <label>Password</label>
            <input type="password" placeholder="(required)" name='password' maxlength="8" id="password"> <img class="pass-icon" src="assets/icons/lock.png" alt=""> <img id="show-icon" src="assets/icons/show.png" alt=""> <img id="hide-icon" src="assets/icons/hide.png" alt="">
            <label>Contact Number</label>
            <input type="tel" name='contact' placeholder="(optional)" aria-label="phone" id="contact" maxlength="11"> <img class="contact-icon" src="assets/icons/phone.png" alt="">
            
            <button id="sign-in-button">Register</button>
        </form>
        </div>
    <script src="assets/js/loginpage/show-password.js"></script>
    <script>
        var backIcon = document.querySelector('#back-icon');
        backIcon.addEventListener('click', function() {
            window.location.href = 'sign-in.php';
        });
    </script>
</body>
</html>
