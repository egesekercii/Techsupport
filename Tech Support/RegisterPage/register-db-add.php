<?php

require_once '../Connection/connection.php';
require_once '../Connection/sanitize.php';

$id = sanitizeString($_POST['user_id']);
$password = sanitizePass($_POST['user_password']);
$perm = $_POST['user_perm'];
$name = sanitizeString($_POST['user_name']);
$location = sanitizeString($_POST['user_location']);

$sql = "SELECT * FROM login_info WHERE user_id='$id'";

$data = $conn->query($sql);

if($data->rowCount() == 1){
echo '<script>
alert("Bu kullanici su anda mevcut lutfen baska bir kullanici adi giriniz.");
window.location.href="register.php";
</script>';	
}else{

$sql = "INSERT INTO login_info (ID, user_id, user_password, user_perm, user_name, user_location) VALUES (0, '$id', '$password', '$perm', '$name', '$location')";

$conn->exec($sql);

echo '<script>
alert("Kayit basariyla eklendi.");
window.location.href="register.php";
</script>';
}
