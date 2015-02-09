<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>Subscriber List</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>

    <body>
        <a href="subscriber.php">Add new Subscriber</a>
        <?php
            require_once 'config.php';

            //1. connec
            $conn = $dbc;

            //2. write sql query
            $sql = "SELECT * FROM subscribers";

            //3. execute the query and store the results
            $result = $conn->query($sql);

            //4. start our html table / grid
            ?>
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Edit</th>
                    </tr>
                    <?php
                        //5. Loop through the date and print the rows and columns.
                        foreach ($result as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['first_name']; ?></td>
                                    <td><?php echo $row['last_name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td>
                                        <a href="subscriber.php?subscriber_id=<?php echo $row['subscriber_id']; ?>">Inspect</a>
                                    </td>
                                    <td>
                                        <a href="delete-subscriber.php?subscriber_id=<?php echo $row['subscriber_id']?>"
                                            onclick="return confirm(\'Are you sure you want to delete this subscriber?\');">Delete</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>
            <?php

            //6. Close the table

            //7. Disconnect
            $conn = null;
        ?>
    </body>
</html>