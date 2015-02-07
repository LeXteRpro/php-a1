<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Thanks for your email</title>
</head>

<body>

<?php
//capture the user input from the form and store it in a variable
$email = $_POST['email'];

//now display a message that includes the email address entered on the form
echo "Thanks for your email $email<br />";

//now use single quotes so we can include html tags that need doublequotes
echo 'Thanks for your email ' . $email . '<br />Click <a href="http://test.com">here</a> to go to the Georgian home page.';
?>

</body>

</html>
