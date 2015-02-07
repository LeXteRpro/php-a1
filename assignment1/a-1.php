<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Current Assigments</title>
</head>
<body>
   
   <form action="current-courses
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   <form action="show-country.php" method="post">
   
   <div>
       <label for="country"> Select your Country:</label>
       <select name="country">
       
       <?php

//1. connect to database
$conn = new PDO('mysql:host=mysql5.loosefoot.com;dbname=gc200261414', 'gc200261414', 'Orie2015');

//2. set up the query to get the country list
$sql = "SELECT country FROM countries";

//3. exeute the query & store the results
$result = $conn->query($sql);

//4. loop through the results
foreach ($result as $row) {
//5. output each country in <option> </option> tags
    echo '<option>' .$row['country']. '</option>';
    
}

//6. disconnect

?>
       
   </div>
   
    
</body>
</html>