<!DOCTYPE html>
<html lang="en">
<head>
    <meta content=text/html; charset="UTF-8" http-equip="Content-type">>
    <title>First Names</title>
    
        <link href="styles.css" rel="stylesheet" media="screen">
    
</head>
<body>
   
   <?php

//1. Connect to database
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200261414', ' gc200261414', 'WtG3aARv');
//2. Set up an SWL SELECT query to find the date we want
$sql = "SELECT first_name FROM subscribers";

//3. Fetch the data from the database and store it in a variable / array
$result = $conn->query(sql);

//4. Start the table & add the column headings
echo '<table><tr><th>First Name</th><th>Last name </th><th>Email</th></tr>';

//5 Loop through the data.  The $row variable represents the current record in the loop
foreach ($result as $row) {
    echo '<tr><td>' . $row['first_name'] . '</td>
    <td>' . $row['lastname'] . '</td>'
    <td>' . $row['email'] . </td></tr>';
    
    
//6 Output the data to the page
    echo $row['first_name'];
}

//7 Disconnect from db
$conn = null;

?>
    
</body>
</html>