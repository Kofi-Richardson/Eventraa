 <?php
require_once '../Auth/connection.php';

$display = $_POST['Eventsubmit'];

$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
