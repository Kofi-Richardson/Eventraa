<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventraa-Login</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Login.css">
</head>
<body>

        <?php
require "./HF/registerationheader.php";
?>




    <section id="Login-dialogue">
        <div class="side-image login-image">
           <button id="loginBut">
               <a  href="login.php" id="al-link">LOGIN</a>
           </button>

            <button id="signupBut">
               <a  href="signup.php" id="as-link">SIGNUP</a>
           </button>

        </div>



        <div class="loginpanel panel">
            <div class="buttonBox">
                <Button>
                   <a href="index.php"><h1>EVENTRAA</h1></a>

                </Button>

                <h1>LOGIN</h1>
            </div>

            <form action="../Auth/Login_script.php" id="login-form" method="POST">
                    <?php

if (isset($_SESSION['error'])) {
    echo "<p  style='color:red ; text-align:center; background-color:#f3f3f3; display:flex; justify-content:center; align-items:center; height:30px;'>{$_SESSION['error']}</p>";
}
?>
                <div class="logininput">
                    <label for="email">Email</label>
                    <input type="text" name="email">
                </div>

                <div class="logininput">
                    <label for="Password">Password</label>
                    <input type="password" name="Password">
                    <a href="" id="">Forgotten password? </a>
                </div>

                <div class="login-submit-button">
                    <input type="submit" id="login-submit" class="Auth-Submit" value="Login">

                </div>
            </form>




        </div>


    </section>






    <?php
require './HF/footer.php';
unset($_SESSION['error']);
?>
</body>
</html>
