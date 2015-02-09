<?php
    require_once 'config.php';

    $first_name = "";
    $last_name = "";
    $email = "";

    if (isset($_POST['submit']) ) {
        //user clicked "submit"
         if (!isset($_GET['subscriber_id'])) {
            //Create new subscriber
            $conn = $dbc;

            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];

            $sql =
                "INSERT INTO subscribers
                (first_name,    last_name,    email   ) VALUES
                ('$first_name', '$last_name', '$email')";
            $conn->query($sql);

            header('Location: subscribers.php');
         }
    }

    //check if we have a subscriber ID in the querystring
    if (isset($_GET['subscriber_id'])) {
        //if we do, store in a variable

        //connect
        $conn = $dbc;

        //select all the data for the selected subscriber
        $subscriber_id = $_GET['subscriber_id'];
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

<!DOCTYPE html>
<html>
    <head>
        <title>Subscriber</title>
    </head>
    <body>
        <form method="post" action="subscriber.php">
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
            <input type="submit" name="submit" value="Subscribe" />
        </form>
    </body>
</html>