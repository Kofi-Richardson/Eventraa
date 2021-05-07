<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>EventPreview</title>
    <link rel='stylesheet' href='index.css'>
    <link rel='stylesheet' href='Eventpreview.css'>
     <link rel='stylesheet' href='events.css'>
     <link rel="stylesheet" href="table.css">
</head>
<body>


<?php
require './HF/hompageheaader.php';

?>


 <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include __DIR__ . '/../Auth/connection.php';

include '../EventHandler/preview.php';

$Eventquery = 'SELECT * FROM Registration_data ';

$eId = $_GET['eventId'];

$q = "SELECT *  FROM Registration_data Reg

 INNER JOIN Users u
 ON Reg.Reg_user_id = u.id
 WHERE Reg.Reg_event_id = ?
    ";

$stmt = $connection->prepare($Eventquery);
$stmtD = $connection->prepare($q);
$stmtD->execute(array($eId));
$ress = $stmtD->fetchAll(PDO::FETCH_OBJ);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($ress as $reservation) {
    echo "



        <table  class='Regdata'>

        <tr>
            <td rowspan='1'> <h3>List of attendes<h3> <td>
        <tr>
        <tr>

                <td><h4>Email</h4></td>
                <td><h4>Contact</h4></td>
        </tr>

        <tr>

                <td>{$reservation->email}</td>
                <td>{$reservation->contact}</td>
        </tr>
</table>




    ";
}

?>





</body>
</html>