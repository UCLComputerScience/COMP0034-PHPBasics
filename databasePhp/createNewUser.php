<?php
require_once('phpDatabaseConnection.php');

$firstName = $_POST['firstName'] ?? '1'; //PHP 7.0
$familyName = $_POST['familyName'] ?? '1';

$qryAdd = "INSERT INTO Users (firstName, familyName) VALUES (";
$qryAdd .= "'" . $firstName . "', '" . $familyName . "')";

$qryFind = "SELECT * FROM Users ";
$qryFind .= "WHERE firstName = '" . $firstName . "' AND familyName = '" . $familyName . "'";

$connection = connectToDb();

//Check if the name exists
$result = mysqli_query($connection, $qryFind);
if (mysqli_num_rows($result) > 0) {
    echo "Sorry... your details are already registered";
} else {
    $result = mysqli_query($connection, $qryAdd);
    // check the query worked
    if ($result) {
        echo "New user created";
        closeDb($connection);
    } else {
        echo mysqli_error($connection);
        closeDb($connection);
        exit;
    }
}