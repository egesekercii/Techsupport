<?php
function sanitizeString($string){
	$string = strip_tags($string);

	$string = str_replace(" ", "", $string);

	return $string;
}

function sanitizePass($password){
	$password = md5($password);

	return $password;
}