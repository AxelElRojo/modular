<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
sesion_bloqueo();
if(!isset($_REQUEST['id']) || $_REQUEST['id'] == 0)
	$_REQUEST['id'] = $_SESSION['id'];
$stmt = $conn->prepare('SELECT * FROM usuarios WHERE id=?');
$stmt->bind_param('i', $_REQUEST['id']);
$stmt->execute();
$res = $stmt->get_result();
$row = $res->fetch_assoc();
echo json_encode(array('exito' => !empty($row), 'usuario' => $row));