<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>List of users</title>
</head>
<body>
<div class="container">
    <h3>List of users in the database</h3>
    <br>
    <?php
    require_once 'phpDatabaseConnection.php';

    // Connect to the database
    $connection = connectToDb();

    // Build the query statement, shown in two steps as you might need this for your coursework
    $query = "SELECT firstName, familyName FROM Users ";
    $query .= "ORDER BY familyName DESC";

    // Execute the query and retrieve the results
    $result = mysqli_query($connection, $query);

    // Display all the users in a table format
    ?>

    <table class="table">
        <tr>
            <th>First name</th>
            <th>Family name</th>
        </tr>

        <?php while ($user = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $user['firstName'] ?></td>
                <td><?php echo $user['familyName'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <?php
    // Free the results from memory
    mysqli_free_result($result_set);

    // Close the connection
    closeDb($connection);
    ?>

</div>
</body>
</html>