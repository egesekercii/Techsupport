<?php

$host = "localhost";
$dbname = "techsupport";
$username = "techSupport";
$password = "password";

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);