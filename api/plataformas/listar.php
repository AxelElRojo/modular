<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('SELECT id, nombre FROM plataformas WHERE eliminado=0');
$stmt->execute();
$res = $stmt->get_result();
$plataformas = [];
while($row = $res->fetch_assoc())
	array_push($plataformas, $row);
echo json_encode(array('exito' => !empty($arr), 'plataformas' => $plataformas));