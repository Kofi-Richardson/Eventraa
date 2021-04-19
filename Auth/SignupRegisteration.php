<?php
require_once './connection.php';
//getting http post from signup page
if (isset($_POST['Signup'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    if (empty($name) || empty($password) || empty($email) || empty($contact)) {
        header("Location:../FrontEnd/signup.php");

    } else if (!empty($name) && !empty($email) && !empty($password) && !empty($contact)) {

        if (isset($name) && isset($email) && isset($password) && isset($contact)) {
            $encrypted_password = md5($password);

            $query = "INSERT INTO Users(username,email,password,contact) VALUES('$name','$email','$encrypted_password','$contact')";
            $statement = $conn->prepare($query);
            $statement->execute();

            header("Location:../FrontEnd/homepage.php");

        }

    }
}
