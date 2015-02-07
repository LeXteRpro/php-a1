<!DOCTYPE html>
<html>

<head>
<title>Subscriber</title>
</head>

<?php
//check if we have a subscriber ID in the querystring
if (isset($_GET['subscriber_id'])) {
	//if we do, store in a variable
	$subscriber_id = $_GET['subscriber_id'];
	
    //connect
    $conn = new PDO('mysql:host=mysql5.loosefoot.com;dbname=gc200261414', 'gc200261414', 'Orie2015');
   
    //select all the data for the selected subscriber
    $sql = "SELECT * FROM subscribers WHERE subscriber_id = $subscriber_id";
    $result = $conn->query($sql);
    
    //store each value from the database into a variable
    foreach ($result as $row) {
    	$first_name = $row['first_name'];
    	$last_name = $row['last_name'];
    	$email = $row['email'];
    }
   
    //disconnect
    $conn = null;
}
?>

<body>

<form method="post" action="save-subscriber.php">

<div>
    <label for="first_name">First Name:</label>
    <input name="first_name" required value="<?php echo $first_name; ?>" />
</div>
<div>
    <label for="last_name">Last Name:</label>
    <input name="last_name" required value="<?php echo $last_name; ?>" />
</div>
<div>
    <label for="email">Email:</label>
    <input name="email" required type="email" value="<?php echo $email; ?>" />
</div>
<input type="hidden" name="subscriber_id" value="<?php echo $subscriber_id; ?>" />
<input type="submit" value="Save" />

</form>

</body>

</html>