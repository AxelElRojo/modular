<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
sesion_existe();
header('Content-Type: application/json');
$fecha_hora = strtotime('Y/m/d hh:mm');
$idUsuario = $_SESSION['id'];
$stmt = $conn->prepare('UPDATE mensajes SET texto=?, fechahora=?, idRemitente=?, idDestinatario=? WHERE id=?');
$stmt->bind_param('ssiii', $_POST['texto'], $fecha_hora, $idUsuario, $_POST['idDestinatario'], $_POST['id']);
$stmt->execute();
echo json_encode(array('exito' => $stmt->affected_rows == 1));