<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once '../Auth/connection.php';

$Reg_event_id = $_POST['eventId'];
$qRes = "SELECT * FROM Registration_data WHERE Reg_user_id = ? AND Reg_event_id = ?";
$stmtQ = $connection->prepare($qRes);
$stmtQ->execute(array($_SESSION['ID'], $Reg_event_id));
$hasRegistered = $stmtQ->rowCount() > 0;

if (!$hasRegistered) {

    $query = "INSERT INTO Registration_data( Reg_user_id,Reg_event_id) VALUE (?,?)";

    // $query2 = 'SELECT * FROM Registration_data WHERE Reg_user_id = ? AND Reg_event_id = ? ';
    // $statement2 = $connection->prepare($query2);
    // $statement2->execute(array($_SESSION['ID'], $Reg_event_id));

// var_dump($_SESSION);
    $statement = $connection->prepare($query);
    $statement->execute(array($_SESSION['ID'], $Reg_event_id));
} else {

    $query = "DELETE FROM Registration_data WHERE Reg_user_id = ? AND Reg_event_id = ?";
    $stmt = $connection->prepare($query);
    $stmt->execute(array($_SESSION['ID'], $Reg_event_id));

}

header("Location: ../FrontEnd/Eventpreview.php?event=$Reg_event_id");
