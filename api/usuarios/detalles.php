<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('SELECT * FROM usuarios WHERE id=?');
$stmt->bind_param('i', $_POST['id']);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
echo json_encode(array('exito' => !empty($row), 'usuario' => $row));