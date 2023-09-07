<?php
require_once('../.includes/db_conn.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('SELECT id, contrasena FROM usuarios WHERE usuario=? OR correo=? LIMIT 1');
$stmt->bind_param('ss', $_POST['usuario'], $_POST['usuario']);
$stmt->execute();
$stmt->bind_result($id, $contrasena);
$stmt->fetch();
if(password_verify($_POST['contrasena'], $contrasena)){
	session_start();
	setcookie('sessid', session_id(), strtotime('+1 day'));
	$_SESSION['id'] = $id;
	if($_POST['nuevo'])
		$_SESSION['noterminado'] = 'hobbies';
	echo json_encode(array('exito' => session_write_close(), 'mensaje' => "Error creando sesión"));
}else
	echo json_encode(array('exito' => false, 'mensaje' => "Datos incorrectos"));