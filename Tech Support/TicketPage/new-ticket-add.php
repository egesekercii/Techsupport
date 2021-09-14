<?php 
session_start();

require_once '../Connection/connection.php';

$yazici_cb = isset($_POST['yazici-arizasi-cb']) ? "Yazici Arizasi" : "-";

$sistem_cb = isset($_POST['sistem-arizasi-cb']) ? "Sistem Arizasi" : "-";

$monitor_cb = isset($_POST['monitor-arizasi-cb']) ? "Monitor Arizasi" : "-";

$kartus_cb = isset($_POST['kartus-cb']) ? "Kartus Dolumu" : "-";

$txt = isset($_POST['txt-area']) ? $_POST['txt-area'] : "-";

$id = $_SESSION['user'];

$sql = "SELECT * FROM login_info WHERE user_id='$id'";

$data = $conn->query($sql);
	
foreach ($data as $rows) {
	$name = $rows['user_name'];
	$location = $rows['user_location'];
}

$sql = "INSERT INTO requests (ID, user_name, user_location, yazici, sistem, monitor, kartus, diger) VALUES (0, '$name', '$location', '$yazici_cb', '$sistem_cb', '$monitor_cb', '$kartus_cb', '$txt')";

$conn->exec($sql);


echo '<script>
alert("İsteğiniz başarıyla gönderildi.");
window.location.href="newTicket.php";
</script>';