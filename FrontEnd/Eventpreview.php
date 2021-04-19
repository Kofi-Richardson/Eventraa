<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Eventpreview.css">
</head>
<body>

<?php
require './HF/hompageheaader.php';
?>

    <div class="event-container">
         <div class="event-preview">
        <div class="event-image-details">
            <div class="event-image">
                    <img src="../images/Conference1.jpg" alt="" height="360px" width="720px">
             </div>

            <div class="event-details">
                <div class="event-details-headers">
                    <h4 class="E-header-details">Event Title</h4>
                    <h5 class="E-header-details">event-date</h5>
                    <h5 class="E-header-details">event-time</h5>
                </div>
                <button type="submit" id="Unregister" onclick="click">Unregister</button>
                <button type="submit" id="Register" onclick="click">Register</button>



            </div>
        </div>

    </div>
    </div>


    <div class="description-container">


          <div class="event-description">
            <div class="event-description-container">
                <h2 class="describtion-container">Event Speaker</h2>
                 <h2 class="describtion-container">Event Description</h2>

            </div>

        </div>

    </div>

 <?php
require './HF/footer.php';

?>



</body>
</html>
