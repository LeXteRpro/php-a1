<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>

<?php
//try connecting to our database on dreamhost
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gcxxxxxxxx', 'gcxxxxxx', 'password_here');

//show a message if we have a connection
echo "Connected to db";

?>

</body>

</html>
