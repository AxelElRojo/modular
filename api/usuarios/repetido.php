<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$_REQUEST['id'] = sesion_existe() ? $_SESSION['id'] : 0;
$stmt = $conn->prepare('SELECT count(id) FROM usuarios WHERE usuario=? AND id!=?');
$stmt->bind_param('si', $_REQUEST['usuario'], $_REQUEST['id']);
$stmt->execute();
$stmt->bind_result($cnt);
echo json_encode(array('exito' => $stmt->fetch(), 'repetido' => $cnt > 0));