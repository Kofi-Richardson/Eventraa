<?php
if(isset($_POST["signup"])){

// session_start();

// $username="";
// $email="";
// $errors = array();

// connect to database
$db = mysqli_connect('localhost','root','Learnhard123@','Eventraa') or die('could not connect to the database');

if($db){
    echo "Success";
}


// Register users

$username = mysqli_real_escape_string($db,$_POST['username']);
$email = mysqli_real_escape_string($db,$_POST['Email']);

$password1= mysqli_real_escape_string($db,$_POST['Password']);
$password2 = mysqli_real_escape_string($db,$_POST['Password2']);

echo $username;

// form validation

    // if (empty($username)) 
    // {
    //     array_push($errors,"Username is required");
    // }

    //  if (empty($email)) 
    // {
    //     array_push($errors,"Email is required");
    // }

    //  if (empty($password1)) 
    // {
    //     array_push($errors,"Password is required");
    // }

    // if($password1 != $password2)
    // {
    //     array_push($errors,"Password does not match");
    // }


    //checking for existing user

    // $user_query_check = "SELECT * FROM user WHERE username= '$username' or email= '$email' LIMIT 1";

    // $results= mysqli_query($db,$user_query_check);
    // $user = mysqli_fetch_assoc($results);

    // if($user['username'] === $username)
    // {
    //     array_push($errors,"Username already exits");
    // }

    //  if($user['email'] === $email)
    // {
    //     array_push($errors,"Email has  an already registered Username");
    // }

    //register the user if errors are zero

    // echo "errors";

    // if (count($errors)== 0){
        $password = md5($password1);
        $query= "INSERT INTO User(username,email,password) VALUES('$username','$email','$password')";


    mysqli_query($db,$query);
    // $_SESSION['username'] = $username;
    // $_SESSION["success"] = "Success you are logged in";

    header('location:homepage.php');

    // }
    // else{
    //     echo "ERror found";
    // }

}
else{
    echo "Not working";
}


?>