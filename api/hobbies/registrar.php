<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$ids = json_decode($_POST['ids'], true);
$exito = true;
$stmt = $conn->prepare('INSERT IGNORE INTO hobbiesUsuario(idUsuario, idHobbie) VALUES(?, ?)');
foreach ($ids as $idHobbie){
	$stmt->bind_param('ii', $_SESSION['id'], $idHobbie);
	$exito = $exito && $stmt->execute();
}
echo json_encode(array('exito' => $exito));