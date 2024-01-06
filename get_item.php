<?php
header('Content-Type: application/json');

include('dbcon.php');

$sql = "SELECT * FROM item";
$result = $conn->query($sql);

$inventory = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $inventory[] = ['name' => $row['name'], 'quantity' => $row['quantity']];
    }
}

echo json_encode(['inventory' => $inventory]);

$conn->close();
?>
