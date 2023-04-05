<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('UPDATE videojuegos SET nombre=?, crossplay=? WHERE id=?');
$stmt->bind_param('sii', $_POST['nombre'], $_POST['crossplay'], $_POST['nombre']);
$stmt->execute();
echo json_encode(array('exito' => $stmt->affected_rows == 1));