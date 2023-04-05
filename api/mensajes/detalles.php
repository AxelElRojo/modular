<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('SELECT * FROM mensajes WHERE id=?');
$stmt->bind_param('i', $_POST['id']);
$stmt->execute();
$res = $stmt->get_result();
$hobbies = [];
$mensaje = $res->fetch_assoc();
echo json_encode(array('exito' => !empty($mensaje), 'mensaje' => $mensaje));