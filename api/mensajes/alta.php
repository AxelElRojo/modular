<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
sesion_existe();
header('Content-Type: application/json');
$fecha_hora = strtotime('Y/m/d hh:mm');
$idUsuario = $_SESSION['id'];
$stmt = $conn->prepare('INSERT INTO mensajes(texto, fechahora, idRemitente, idDestinatario) VALUES(?,?,?,?)');
$stmt->bind_param('ssii', $_POST['texto'], $fecha_hora, $idUsuario, $_POST['idDestinatario']);
$stmt->execute();
echo json_encode(array('exito' => $stmt->affected_rows == 1, 'id' => $stmt->insert_id));