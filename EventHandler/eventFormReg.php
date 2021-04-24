  <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../Auth/connection.php';

$event_title = $_POST['event-title'];
$event_speaker = $_POST['event-speaker'];
$event_description = $_POST['event-description'];
$event_online = $_POST['online'];
$event_venue = $_POST['venue'];
$event_online_link = $_POST['online-address'];
$date_start = $_POST['start-date'];
$date_end = $_POST['end-date'];
$time_start = $_POST['time-start'];
$time_end = $_POST['time-end'];
$event_image_link = $_POST['event-image-link'];

$query = "INSERT INTO Events (EVENT_TITLE,EVENT_SPK,EVENT_DES,IMG_LINK,EVENT_LINK,TIME_START,TIME_END,DATE_START,DATE_END) VALUE(?,?,?,?,?,?,?,?,?)";

$statement = $connection->prepare($query);
$statement->execute(array($event_title,
    $event_speaker,
    $event_description,
    $event_image_link,
    $event_online == 'online' ? $event_online_link : $event_venue,
    $time_start,
    $time_end,
    $date_start,
    $date_end,

));
header('Location: ../FrontEnd/events.php');
