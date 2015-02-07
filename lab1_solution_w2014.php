<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<?php

//set up the SQL instruction 
$sql = "SELECT * FROM teams";

$conn = new PDO("mysql:host=localhost;dbname=dbx", 'dbx', 'x');

//now execute the SQL command in the db; store the whole dataset in a $result variable
$result = $conn->query($sql);

echo '<table border="1"><tr><th>City</th><th>Nickname</th><th>Division</th></tr>';

//loop throught the collection of data
foreach ($result as $row) {
	echo '<tr><td>' . $row['city'] . '</td><td>' . $row['nickname'] . '</td><td>' . $row['division'] . '</td></tr>';
}

echo '</table>';

//disconnect from the db
$conn = null;

?>

</body>

</html>
