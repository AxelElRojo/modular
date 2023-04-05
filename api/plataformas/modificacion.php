<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('UPDATE plataformas SET nombre=? WHERE id=?');
$stmt->bind_param('si', $_POST['nombre'], $_POST['nombre']);
$stmt->execute();
echo json_encode(array('exito' => $stmt->affected_rows == 1));