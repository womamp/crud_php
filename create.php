<?php
include "../config/database.php";
$data = json_decode(file_get_contents("php://input"), true);
$sql = "INSERT INTO items (name, description) VALUES ('{$data['name']}', '{$data['description']}')";
$conn->query($sql);
echo json_encode(["message" => "Data ditambahkan"]);
?>
