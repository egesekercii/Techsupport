<?php

$pdo = require_once '../Connection/connection.php';

$id = $_POST['user_id'];

$sql = "DELETE FROM login_info WHERE user_id = '$id'";

$conn->exec($sql);

echo '<script>
alert("Kayit basariyla silindi.");
window.location.href="register.php";
</script>';	