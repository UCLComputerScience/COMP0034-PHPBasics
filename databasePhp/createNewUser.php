<?php
require_once('phpDatabaseConnection.php');

$firstName = $_POST['firstName'] ?? '1'; //PHP 7.0
$familyName = $_POST['familyName'] ?? '1';

$query = "INSERT INTO Users (firstName, familyName) VALUES (";
$query .= "'" . $firstName . "', '" . $familyName ."')";

$connection = connectToDb();

$result = mysqli_query($connection, $query);

// check the query worked
if($result) {
    echo "New user created";
    closeDb($connection);
} else {
    echo mysqli_error($connection);
    closeDb($connection);
    exit;
}