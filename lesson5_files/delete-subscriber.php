<?php 
//send any html to an output buffer rather than the browser so we can redirect the page
ob_start(); 
?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Delete Subscriber</title>
</head>

<body>

<?php
//1. grab the subscriber_id from the url querystring
$subscriber_id = $_GET['subscriber_id'];

//2. connect
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gcrfreeman', 'gcrfreeman', 'x');

//3. write & then execute the sql command to delete the selected record
$sql = "DELETE FROM subscribers WHERE subscriber_id = $subcriber_id";
$conn->exec($sql);


//4. disconnect
$conn = null;

//5. redirect back to updated subscribers.php
//header('location:subscribers.php');
//echo $sql;
?>

</body>

<script type=""
</html>

<?php ob_flush(); ?>
