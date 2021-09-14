<?php

session_start();

require_once '../Connection/connection.php';
require_once '../Connection/sanitize.php';

$id = sanitizeString($_POST['user_id']);
$password = sanitizePass($_POST['user_password']);

$sql = "SELECT * FROM login_info WHERE user_id='$id' AND user_password='$password'";

$data = $conn->query($sql);

if($data->rowCount() == 1){
	foreach ($data as $rows) {
		$perm = $rows['user_perm'];
	}
	$_SESSION['user'] = $id;

	if($perm === "tekniker"){
		header("Location: ../TechPage/techPage.php");
	}else{
		header("Location: ../TicketPage/newTicket.php");
	}
}else{
	echo '<script>
	alert("Kullanıcı adı veya şifre yanlış lütfen tekrar deneyiniz.");
	window.location.href="login.php";
	</script>';	
}