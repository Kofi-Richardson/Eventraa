<?php

session_start();

//assigning variables to the data from the login form

$email = $_POST['email'];
$password = $_POST['Password'];
$error = "Username or password invalid ";

//checking if user entered password in order to give him or her a go ahead

if (isset($email) && isset($password)) {
    $password_hash = md5($password);
    $connection = new PDO("mysql:host=localhost;dbname=Eventraa", "root", "Learnhard123@");
    $query = 'SELECT * FROM Users WHERE email = ?';
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
        $row_id = $result['id'];

        if ($email == $row_email && $password_hash == $row_password) {
            // echo"you are logged in";
            unset($_SESSION['error']);
            $_SESSION['Email'] = $email;
            $_SESSION['ID'] = $row_id;
            // var_dump($result);
            var_dump($_SESSION);
            // die();
            header("Location: ../FrontEnd/homepage.php");
        } else {
            //  echo 'theres an error';
            // var_dump($row_email, $row_password, $email, $password);
            $_SESSION['error'] = $error;
            header("Location: ../FrontEnd/login.php");

        }

    }
}
