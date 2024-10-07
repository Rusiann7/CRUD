<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include('database.php');

$usrid = 1;

$stmt = $conn->prepare("SELECT id, firstname, lastname, is_admin FROM Users WHERE id = ?");
$stmt->bind_param("i", $userId); 


$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo json_encode($user);
} else {
    echo json_encode(["message" => "No user found with that ID"]);
}

$stmt->close();
$conn->close();
?>