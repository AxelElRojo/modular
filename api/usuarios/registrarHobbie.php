<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
sesion_existe();
header('Content-Type: application/json');
$idUsuario = $_SESSION['id'];
$stmt = $conn->prepare('INSERT INTO hobbiesUsuario(idUsuario, idHobby) VALUES(?,?)');
$stmt->bind_param('ii', $_POST['idUsuario'], $_POST['idHobby']);
$stmt->execute();
echo json_encode(array('exito' => $stmt->affected_rows == 1));