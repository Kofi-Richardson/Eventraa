
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
</head>
<body>


<?php
require './HF/hompageheaader.php';

?>

       <section id='eventcontainer' class='eventpage'>

        <div class='eventHeaders'>
                <button><h1>My Events</h1></button>
                <!-- <p>A quick tour of events memories by Eventraa</p> -->
        </div>


<div class='event-firstgrid event-grids'>


 <?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Displaying Events created by the user or admin

include '../EventHandler/preview.php';
// session_start();

$uid = $_SESSION['ID'];

$Eventquery = "Select * FROM Events WHERE user_id = $uid";

$stmt = $connection->prepare($Eventquery);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($res as $event) {
    echo "


        <a  id='event-preview-link' href='EventManageview.php?eventId={$event->Events_id}'>
            <div id='event-rowone' class='event-rows'>



                <div id='event-gridone' >

                       <img src='$event->IMG_LINK' alt='' width='300'>

                   <div class='event-grid-details'>
                           <p>$event->EVENT_TITLE </p>

                              <p class='event-grid-date-time'> DATE: $event->DATE_START </p>
                                <p class='event-grid-date-time'>TIME: $event->TIME_START </p>

                    </div>

                </div>
                </div>

        </a>
";
}

?>
</div>




</body>
</html>