<?php
include "../config/database.php";
$data = json_decode(file_get_contents("php://input"), true);
$sql = "DELETE FROM items WHERE id={$data['id']}";
$conn->query($sql);
echo json_encode(["message" => "Data dihapus"]);
?>
