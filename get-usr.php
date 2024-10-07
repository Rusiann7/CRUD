<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include('database.php');

$sql = "SELECT id, firstname, lastname, is_admin FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $users = [];

    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    
    echo json_encode($users);
} else {
    echo json_encode(["message" => "No users found"]);
}

$conn->close();
?>
