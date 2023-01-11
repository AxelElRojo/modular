<?php
function sesion_existe() : bool {
	if(isset($_COOKIE['sess_id']))
		session_id($_COOKIE['sess_id']);
	elseif(isset($_COOKIE['PHPSESSID']))
		session_id($_COOKIE['PHPSESSID']);
	else
		return false;
	session_start();
	return isset($_SESSION['id']);
}
function sesion_bloqueo() : void {
	if(sesion_existe())
		return;
	header("Location: /index.php");
	die();
}