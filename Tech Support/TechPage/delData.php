<?php

$pdo = require_once '../Connection/connection.php';

$IDNumber = $_GET['id'];

$sql = "DELETE FROM requests WHERE ID = '$IDNumber'";

$conn->exec($sql);

echo '<script>
alert("Kayit basariyla silindi.");
window.location.href="techPage.php";
</script>';	