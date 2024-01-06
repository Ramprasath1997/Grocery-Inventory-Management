<?php
header('Content-Type: application/json');

include('dbcon.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO item (name, quantity) VALUES ('$name', $quantity)";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['message' => 'Item added successfully']);
    } else {
        echo json_encode(['error' => 'Error adding item: ' . $conn->error]);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}

$conn->close();
?>
