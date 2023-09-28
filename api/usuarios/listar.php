<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('SELECT id, nombre FROM usuarios WHERE eliminado=0 ORDER BY nombre');
$stmt->execute();
$res = $stmt->get_result();
$usuarios = [];
while($row = $res->fetch_assoc())
	array_push($usuarios, $row);
echo json_encode(array('exito' => !empty($arr), 'usuarios' => $usuarios));