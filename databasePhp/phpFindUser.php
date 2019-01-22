<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Find a user</title>
</head>
<body>
<div class="container">

    <h2>Find a single user</h2>
    <form method='post' action='<?php findUser() ?>' name='findUserForm'>
        <label>First Name:</label>
        <input type='text' name='firstName' size='30'>
        <label>Family Name:</label>
        <input type='text' name='familyName' size='30'>
        <p><input type='submit' value='Find User'></p>
    </form>

    <?php
    function findUser()
    {
        $firstName = $_GET['firstName'] ?? '1'; //PHP 7.0
        $familyName = $_GET['familyName'] ?? '1';

        $query = "SELECT * FROM Users ";
        $query .= "WHERE firstName = '" . $firstName. "' AND familyName = '" . $familyName ."'";

        $connection = connectToDb();

        $result = msysqli_query($connection, $query);

        if (!$result){
        exit("databasePhp query failed.");
        }

        $user = mysqli_fetch_assoc($result);
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
        }

    ?>

</div>
</body>
</html>