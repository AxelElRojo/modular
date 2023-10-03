<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
sesion_bloqueo();
if(!isset($_POST['id']) || !$_POST['id'])
	$_POST['id'] = $_SESSION['id'];
if(isset($_POST['contrasena']) && $_POST['contrasena']){
	$_POST['contrasena'] = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);
	$stmt = $conn->prepare('UPDATE usuarios SET usuario=?, correo=?, nombre=?, contrasena=?, descripcion=? WHERE id=?');
	$stmt->bind_param('sssssi', $_POST['usuario'], $_POST['correo'], $_POST['nombre'], $_POST['contrasena'], $_POST['descripcion'], $_POST['id']);
}else{
	$stmt = $conn->prepare('UPDATE usuarios SET usuario=?, correo=?, nombre=?, descripcion=? WHERE id=?');
	$stmt->bind_param('ssssi', $_POST['usuario'], $_POST['correo'], $_POST['nombre'], $_POST['descripcion'], $_POST['id']);
}
echo json_encode(array('exito' => $stmt->execute()));