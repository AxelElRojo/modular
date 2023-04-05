<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('UPDATE usuarios SET usuario=?, correo=?, nombre=?, contrasena=?, descripcion=? WHERE id=?');
$stmt->bind_param('sssssi', $_POST['usuario'], $_POST['correo'], $_POST['nombre'], $_POST['contrasena'], $_POST['descripcion'], $_POST['id']);
$stmt->execute();
echo json_encode(array('exito' => $stmt->affected_rows == 1));