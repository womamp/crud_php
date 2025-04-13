<?php
include "../config/database.php";
$data = json_decode(file_get_contents("php://input"), true);
$sql = "UPDATE items SET name='{$data['name']}', description='{$data['description']}' WHERE id={$data['id']}";
$conn->query($sql);
echo json_encode(["message" => "Data diperbarui"]);
?>
