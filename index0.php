<?php 
session_start();
    include("connection.php");
    include("login.php")
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
                <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
                    <div class="field username-field">
                        <input type="text" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="field password-field">
                        <input type="password" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="field button-field">
                        <button class="button button-login" id="btn" value="Login" type="submit" name = "submit">LOGIN</button>
                        <button class="button button-register" type="submit"><a href="index1.php">REGISTER</a></button>
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
            function isvalid(){
                var user = document.form.user.value;
                var pass = document.form.pass.value;
                if(user.length=="" && pass.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(user.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
</body>

</html>