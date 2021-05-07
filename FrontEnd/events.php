<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Eventraa-Events</title>
    <link rel='stylesheet' href='index.css'>
    <link rel='stylesheet' href='events.css'>
</head>
<body>

       <!-- Header of the page  -->

<?php
require './HF/hompageheaader.php';

?>




              <section id='eventcontainer' class='eventpage'>

        <div class='eventHeaders'>
                <button><h1>Upcoming Events</h1></button>
                <!-- <p>A quick tour of events memories by Eventraa</p> -->
        </div>


<div class='event-firstgrid event-grids'>


 <?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../EventHandler/preview.php';

$Eventquery = 'SELECT * FROM Events ';

$stmt = $connection->prepare($Eventquery);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($res as $event) {
    echo "


        <a  id='event-preview-link' href='http://localhost/ModernCoursework/FrontEnd/Eventpreview.php?event=$event->Events_id'>
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





     </section>





   <!-- <section id='eventcontainer' class='eventpage'>

        <div class='eventHeaders'>
                <button><h1>Upcoming Events</h1></button>

        </div>

         <div class='event-firstgrid event-grids'>

            <div id='event-rowone' class='event-rows'>

                <div id='event-gridone'>
                   <a href=''>
                       <img src='../images/children.jpg' alt='' width='300'>
                   </a>
                   <div class='event-grid-details'>
                           <p> Fred's Party </p>
                            <div id='event-grid-date-time'>
                               date and time
                           </div>
                    </div>
                </div>

                <div id='event-gridone'>
                    <a href=''>
                       <img src='../images/children.jpg' alt='' width='300'>
                   </a>
                   <div class='event-grid-details'>
                           <p> Fred's Party </p>
                            <div id='event-grid-date-time'>
                               date and time
                           </div>
                    </div>
                </div>

                <div id='event-gridone'>
                    <a href=''>
                       <img src='../images/children.jpg' alt='' width='300'>
                   </a>
                   <div class='event-grid-details'>
                           <p> Fred's Party </p>
                            <div id='event-grid-date-time'>
                               date and time
                           </div>
                    </div>
                </div>

            </div>


         </div>



     </section> -->




         <?php require './HF/footer.php'?>

</body>
</html>