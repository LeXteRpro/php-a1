<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Subscribers</title>
</head>
<body>
    <?php
//Send any html to an output
ob_start();
?>

<?php
require_once 'config.php';

//1. Grab the subscriber_id from the url querystring
$subscriber_id = $_GET['subscriber_id'];

//2. Connect
$conn = $dbc;


//3. Write & then execute the sql command to delete the selected record
$sql = "DELETE FROM subscribers WHERE subscriber_id = $subscriber_id"
$conn->exec($sql);

//4. disconnect
$conn = null;

//5. Redirect back to updated subscribers.php
header ('location:subscribers.php');
echo $sql;
?>

</body>
</html>

<?php ob_flush(); ?>

