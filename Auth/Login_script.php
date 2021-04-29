<?php

session_start();

$email = $_POST['email'];
$password = $_POST['Password'];
$error = "Username or password invalid ";

if (isset($email) && isset($password)) {
    $password_hash = md5($password);
    $connection = new PDO("mysql:host=localhost;dbname=Eventraa", "root", "Learnhard123@");
    $query = 'SELECT email,password FROM Users WHERE email = ?';
    $statement = $connection->prepare($query);
    $statement->execute(array($email));
    if ($statement->rowCount() == 0) {
        //echo user not found
        $_SESSION['error'] = $error;

        header("Location: ../FrontEnd/login.php");

    } else {

        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $result = $statement->fetch();
        //var_dump($result);
        $row_email = $result["email"];
        $row_password = $result["password"];

        if ($email == $row_email && $password_hash == $row_password) {
            // echo"you are logged in";
            unset($_SESSION['error']);
            $_SESSION['Email'] = $email;
            header("Location: ../FrontEnd/homepage.php");
        } else {
            //  echo 'theres an error';
            // var_dump($row_email, $row_password, $email, $password);
            $_SESSION['error'] = $error;
            header("Location: ../FrontEnd/login.php");

        }

    }
}
