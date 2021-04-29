<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>EventPreview</title>
    <link rel='stylesheet' href='index.css'>
    <link rel='stylesheet' href='Eventpreview.css'>
</head>
<body>

<?php
require './HF/hompageheaader.php';
?>



<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../EventHandler/preview.php';

$eventId = $_GET['event'];

$Eventquery = 'SELECT * FROM Events WHERE Events_id = ?';
$stmt = $connection->prepare($Eventquery);
$stmt->execute(array($eventId));
$stmt->setFetchMode(PDO::FETCH_OBJ);
$res = $stmt->fetch();

if ($stmt->rowCount() == 1) {

    echo "
                    <div class='event-container'>
         <div class='event-preview'>
        <div class='event-image-details'>
            <div class='event-image'>
                    <img src='$res->IMG_LINK' alt=''height='360px' width='720px'>
             </div>

            <div class='event-details'>
                <div class='event-details-headers'>
                    <h4 class='E-header-details Title'> $res->EVENT_TITLE </h4>
                    <h6 class='E-header-details'> DATE</h6>
                    <h5 class='E-header-details Title'> $res->DATE_START </h5>
                    <h6 class='E-header-details'> TIME</h6>
                    <h5 class='E-header-details Title'>  $res->TIME_START- $res->TIME_END</h5>
                </div>

                <div class='RegContainer'>

                 <label class='Registration Reg' onclick='click'>
                 <input value='Register' type='radio' id='register' name='Registeration'>
                        <div class='content' >
                            Register
                        </div>
            </label>

             <label class='Registration Unreg' onclick='click'>
                 <input value='UnRegister' type='radio' id='Unregister' name='Registeration'>
                        <div class='content' >
                            Unregister
                        </div>
            </label>

            <span id='RegistrationCount'> </span>
                </div>





            </div>
        </div>



    </div>
    </div>


    <div class='describtion-container'>


          <div class='event-description'>
            <div class='event-description-container'>
                <h2 class='describtion-container'> BY $res->EVENT_SPK </h2>
                 <p class='describtion-container'> $res->EVENT_DES </p>

            </div>

        </div>

    </div>

            ";

}

?>



 <?php
require './HF/footer.php';

?>

<script>


</script>

</body>
</html>
