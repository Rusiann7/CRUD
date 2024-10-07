<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');
include ('database.php');

$firstname = "Marcelo";
$lastname = "Trinidad";
$isadm = 1;

$sql = "INSERT INTO Users (firstname, lastname, is_admin)
VALUES ('$firstname', '$lastname', '$is_admin')";

if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>