<?php
include "../config/database.php";
$result = $conn->query("SELECT * FROM items");
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
