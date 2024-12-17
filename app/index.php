<?php 
session_start();

if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jerson.</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../public/styles/index.css"">
    <link rel="stylesheet" href="../public/styles/globals.css">
    <link rel="stylesheet" href="../public/styles/home.css"">
    <link rel="stylesheet" href="../public/styles/spider.css">

    <!-- JavaScript -->
    <script src="../public/js/home.js" defer></script>
    <script src="../public/js/spider.js" defer></script>
</head>
<body>

    <?php include "../components/navbar.php" ?>
    
    <main>
        <div class="login-container sr">
            <h1 class="form-header">Welcome</h1>
            <span class="welcome">Sign in to view my works and projects</span>

            <form id="signin-form" action="./api/auth.php" method="post">

                <div class="input-container">
                    <label for="username">Username</label>
                    <input required id="signin-username" name="username" type="text" autocomplete="off">
                </div>

                <div class="input-container">
                    <label for="password">Password</label>
                    <input required id="signin-password" name="password" type="password" autocomplete="off">
                </div>

                <div id="error-signin">
                    <p>Invalid username or password</p>
                </div>

                <button form="signin-form" type="submit" class="button" name="action" value="signin">
                    <span>Sign in</span>
                </button>
            </form>

            <div class="sign-up-prompt-container">
                <span>Not registered yet? </span>
                <button class="signup-btn">Sign up now</button>
            </div>

            <footer>
                <h1 class="footer-header">Get in touch</h1>
                <div class="contacts-group">
                    <div class="contact">
                        <img class="phone-icon" src="../public/svg/phone1.svg" alt="phone">
                        <span class="phone">+63 927 324 0956</span>
                    </div>
                    <div class="contact">
                        <img class="email-icon" src="../public/svg/email1.svg" alt="email">
                        <span class="email">jersoncaibog0423@gmail.com</span>
                    </div>  
                </div>
                <h1 class="footer-header">Follow me</h1>
                <div class="socials-group">
                    <a href="https://www.facebook.com/jerson.dereal.caibog/" target="_blank">
                        <img src="../public/svg/facebook.svg" alt="">
                    </a>    
                    <a href="https://www.instagram.com/jersondereal/" target="_blank" class="instagram">
                        <img src="../public/svg/instagram.svg" alt="">
                    </a>
                    <a href="https://github.com/jersoncaibog" target="_blank" class="github">
                        <img src="../public/svg/github.svg" alt="">
                    </a>
                    <a href="https://www.linkedin.com/in/jerson-caibog-182278261/" target="_blank" class="linkedin">
                        <img src="../public/svg/linkedin.svg" alt="">
                    </a>
                </div>
                <p class="copyright">&copy; 2024 Jerson D. Caibog. All rights reserved.</p>
            </footer>
        </div>

        <div class="spider-container">
            <canvas id="canvas"><canvas>
        </div>

        <div class="quote-container su">
            <img src="../public/svg/quotes.svg" alt="">
            <p class="quote">If you're gonna lose over here, you're gonna win over there.</p>
            <span class="author">- Anonymous</span>
        </div>
    </main>

    <!-- Sign up modal -->
    <div class="signup-container">

        <div class="backdrop"></div>
        
        <div class="form-container">
            <button class="close-btn">&times;</button>

            <h1 class="form-header">Sign up</h1>
            <span class="welcome">Register a new account</span>

            <form id="signup-form" action="./api/auth.php" method="post">
                <div class="input-container">
                    <label for="username">Username</label>
                    <input required id="signup-username" name="username" type="text" autocomplete="off">
                </div>

                <p class="error" id="username-too-short">Username is too short (must be atleast 5 characters)</p>

                <div class="input-container">
                    <label for="password">Password</label>
                    <input required id="signup-password" name="password" type="password" autocomplete="off">
                </div>

                <p class="error" id="password-too-short">Password is too short (must be atleast 5 characters)</p>

                <div class="input-container">
                    <label for="repeat-password">Confirm password</label>
                    <input required id="repeat-password" name="repeat-password" type="password" autocomplete="off">
                </div>

                <p class="error" id="password-not-match">Passwords do not match.</p>
    
                <button form="signup-form" type="submit" id="signup-submit" class="button" name="action" value="signup">
                    <span>Sign up</span>
                </button>
            </form>
        </div>
    </div>
</body>
</html>
