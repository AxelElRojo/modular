<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('UPDATE plataformas SET eliminado=1 WHERE id=?');
$stmt->bind_param('i', $_POST['id']);
$stmt->execute();
echo json_encode(array('exito' => $stmt->affected_rows));