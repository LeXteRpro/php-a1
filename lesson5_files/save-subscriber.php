<?php ob_start(); ?>

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
$subscriber_id = $_POST['subscriber_id'];

// 2. connect to db
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gcrfreeman', 'gcrfreeman', 'x');

// 3. set up an SQL instruction for saving
if (empty($subscriber_id)) {  //if we have no id, add a new record
	$sql = "INSERT INTO subscribers (first_name, last_name, email) VALUES ('$first_name', '$last_name', 	'$email')";	
}
else { //if we already have an id, update that record
	$sql = "UPDATE subscribers SET first_name = '$first_name', last_name = '$last_name', email = '$email' 	WHERE subscriber_id = $subscriber_id";
	//echo $sql;
}
//echo $sql;

// 4. execute the save
$conn->exec($sql);

// 5. disconnect
$conn = null;

// 6. redirect to updated subscriber list
header('location:subscribers.php');
?>

</body>

</html>
<?php ob_flush(); ?>
