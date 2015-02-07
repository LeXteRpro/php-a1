<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Saving...</title>
</head>

<body>

<?php
// 1. save inputs to variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

// 2. connect to db
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gcrfreeman', 'gcrfreeman', 'mxxxx');

// 3. set up an SQL instruction for saving
$sql = "INSERT INTO subscribers (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

// 4. execute the save
$conn->exec($sql);

// 5. disconnect
$conn = null;

// 6. display a message
echo "Subscriber saved";
?>

</body>

</html>
