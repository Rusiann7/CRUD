<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');
include ('database.php');

$userId = 1;
$firstname = "Crisostomo";
$lastname = "Daraya";
$isadm = 0;

$stmt = $conn->prepare("UPDATE Users SET firstname = ?, lastname = ?, is_admin = ? WHERE id = ?");
$stmt->bind_param("ssii", $firstname, $lastname, $isadm, $userId);

if ($conn->query($sql) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>