<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventraa-Signup</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="signup.css">
</head>
<body>
         <header>
        <nav id="navigation">

            <div id="logo" class="navitem">
                <a href=""><h2>EVENTRAA</h2></a>
            </div>

            <div class="navitem-container">
                <div id="navlist" class="navitem">
                    <ul>


                    </ul>
                </div>


            </div>

        </nav>
    </header>




    <section id="signup-dialogue">
        <div class="side-image signup-image">
           <button id="loginBut">
               <a  href="login.php" id="al-link">LOGIN</a>
           </button>

            <button id="signupBut">
               <a  href="signup.php" id="as-link">SIGNUP</a>
           </button>

        </div>



        <div class="signup-panel panel">
            <div class="buttonBox">
                <Button>
                    <h1>EVENTRAA</h1>

                </Button>

                <h1>SIGNUP</h1>


            </div>

            <form action="../Auth/SignupRegisteration.php" id="signup-form" method="POST">

                <div class="signup-input">
                    <label for="username">Username</label>
                    <input type="text" name="username"
                    placeholder="Eg:KofiRichardson">
                </div>



                 <div class="signup-input">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="kofirichardson@example.com...">
                </div>

                 <div class="signup-input">
                    <label for="contact">Contact</label>
                    <input type="text" name="contact" placeholder="+233 458...">
                </div>

                <div class="signup-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" onkeyup="check();" >
                    <!-- <a href="">Forgotten password?</a> -->
                </div>

                 <div class="signup-input">
                    <label for="confirmPassword">Confirm password</label>
                    <input type="password" name="confirmPassword" id="confirmPassword" onkeyup="check();" >
                    <!-- <a href="">Forgotten password?</a> -->

                </div>

                <div id="password-error-check">
                     <span id="message"></span>
                </div>





                <div class="signup-submit-button">
                    <input id="signup-submit" class="Auth-Submit" type="submit" value="SignUp" name="Signup">


                </div>
            </form>




        </div>


    </section>






  <?php
require './HF/footer.php'
?>

    <script>

    //checking password

    let password=document.getElementById('password');
    let confirmpassword =document.getElementById('confirmPassword');
          var check = function() {

  if (password.value ===
    confirmpassword.value) {
        if(password.value == "" && confirmpassword.value == ""){
            document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password is required';
        } else{
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password is matching';
        }
  }

  else  {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password is not matching';
  }



}

    //
    </script>
</body>
</html>