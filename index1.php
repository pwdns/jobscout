<?php
session_start();
include("connection.php");
include("signup.php")
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div class="login-field">
        <div class="login-background">
            <div class="login-title">
                <span>Sign In</span>
            </div>
            <div class="login-form">
                <form name="form" action="signup.php" onsubmit="return isvalid()" method="POST">
                    <div class="field username-field">
                        <input type="text" id="user" name="user" placeholder="Username">
                    </div>
                    <div class="field email-field">
                        <input type="email" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="field password-field">
                        <input type="password" id="pass" name="pass" placeholder="Password">
                    </div>
                    <div class="field password-field">
                        <input type="password" id="cpass" name="cpass" placeholder="Retype password">
                    </div>
                    <div class="field button-field">
                        <button class="button button-login" id="btn" value="SignUp" type="submit" name="submit">SignUp</button>
                        <button class=" button button-register" type="submit">Have an account? <a href="index0.php">login</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <span class="square square-tl"></span>
    <span class="square square-tr"></span>
    <span class="square square-bl"></span>
    <span class="square square-br"></span>
    <span class="star star1"></span>
    <span class="star star2"></span>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>