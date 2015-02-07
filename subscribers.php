<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Subscriber List</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

<a href ="subscriber.php">Add new Subscriber</a>
<?php
require_once 'config.php';

//1. connec
$conn = $dbc;

//2. write sql query
$sql = "SELECT * FROM subscribers";

//3. execute the query and store the results
$result = $conn->query($sql);

//4. start our html table / grid
echo '<table><tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Edit</th></tr>';
    <table>
        <tr>
            <th. First Name/th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Delete</th>
        </tr>'; //5. Loop through the date and print the rows and columns. echo $row[$result as $row) { echo '
        <tr>
            <td>' . $row['first_name'] . '</td>
            <td>' .$row['last_name'] . '</td>
            <td>' .$row['email'] . '</td>
        <td><a href="subscriber.php?subscriber_id=' . $row['subscriber_id']
        <td><a href= "delete-subscriber.php?subscriber_id=' . $row['subscriber_id'] . '"onclick="return confirm(\'Are you sure you want to delete this subscriber?\');">Delete</a></td></tr>';
}
//6. Close the table

//7. Disconnect
$conn = null;

?>
</body>
</html>