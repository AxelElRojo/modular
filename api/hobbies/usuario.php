<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
sesion_bloqueo();
$stmt = $conn->prepare('SELECT idHobbie FROM hobbiesUsuario WHERE idUsuario=?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$res = $stmt->get_result();
$hobbies = [];
while($row = $res->fetch_assoc())
	array_push($hobbies, $row['idHobbie']);
echo json_encode(array('exito' => $stmt->error == "", 'hobbies' => $hobbies));