<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('INSERT INTO videojuegos(nombre, crossplay) VALUES(?,?)');
$stmt->bind_param('si', $_POST['nombre'], $_POST['crossplay']);
$stmt->execute();
echo json_encode(array('exito' => $stmt->affected_rows == 1, 'id' => $stmt->insert_id));