<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/connection.php';
//getting http post from signup page
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact = $_POST['contact'];

    if (empty($name) || empty($password) || empty($email) || empty($contact)) {
        header("Location:../FrontEnd/signup.php");

    } else if (!empty($name) && !empty($email) && !empty($password) && !empty($contact)) {

        if (isset($name) && isset($email) && isset($password) && isset($contact)) {
            $encrypted_password = md5($password);

            $query = "INSERT INTO Users(username,email,contact,password) VALUES('$name','$email','$contact','$encrypted_password')";
            $statement = $connection->prepare($query);
            $statement->execute();
            var_dump($statement);

            header("Location:../FrontEnd/login.php");

        }

    }
}
