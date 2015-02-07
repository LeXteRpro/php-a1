<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Subscriber List</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<a href="subscriber.php">Add New Subscriber</a>

<?php
//1. connect
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gcrfreeman', 'gcrfreeman', 'x');

//2. write sql query
$sql = "SELECT * FROM subscribers";

//3. execute the query and store the results
$result = $conn->query($sql);

//4. start our html table / grid
echo '<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Edit</th><th>Delete</th></tr>';

//5. loop through the results and add each row and column to the table
// <tr> creates a new row in the table
// <td> creates a new column
foreach ($result as $row) {
	echo '<tr><td>' . $row['first_name'] . '</td>
		<td>' . $row['last_name'] . '</td>
		<td>' . $row['email'] . '</td>
		<td><a href="subscriber.php?subscriber_id=' . $row['subscriber_id'] .'">Edit</a></td>
		<td><a href="delete-subscriber.php?subscriber_id=' . $row['subscriber_id'] . '" 
			onclick="return confirm(\'Are you sure you want to delete this subscriber?\');">Delete</a></td>
		</tr>';
}

//6. close the table
echo '</table>';

//7. disconnect
$conn = null;
?>

</body>

</html>
