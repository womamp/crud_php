<?php
$host = "localhost";
$username = "root";
$password = ""; // default XAMPP tidak ada password
$database = "crud_php";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
