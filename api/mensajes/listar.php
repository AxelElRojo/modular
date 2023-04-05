<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('SELECT id, idDestinatario FROM mensajes WHERE eliminado=0 AND idRemitente=?');
$stmt->bind_param('i', $_POST['idUsuario']);
$stmt->execute();
$res = $stmt->get_result();
$mensajes = [];
while($row = $res->fetch_assoc())
	array_push($mensajes, $row);
echo json_encode(array('exito' => !empty($mensajes), 'mensajes' => $mensajes));