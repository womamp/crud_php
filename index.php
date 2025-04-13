<?php
include "config/database.php";
$result = $conn->query("SELECT * FROM items");
?>
<!DOCTYPE html>
<html>
<head><title>CRUD PHP</title></head>
<body>
<h2>Daftar Item</h2>
<ul>
<?php while ($row = $result->fetch_assoc()): ?>
    <li><?= $row['name']; ?> - <?= $row['description']; ?></li>
<?php endwhile; ?>
</ul>
</body>
</html>
