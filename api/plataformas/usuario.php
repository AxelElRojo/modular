<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
sesion_bloqueo();
$stmt = $conn->prepare('SELECT idPlataforma FROM plataformasUsuario WHERE idUsuario=?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$res = $stmt->get_result();
$plataformas = [];
while($row = $res->fetch_assoc())
	array_push($plataformas, $row['idPlataforma']);
echo json_encode(array('exito' => $stmt->error == "", 'plataformas' => $plataformas));