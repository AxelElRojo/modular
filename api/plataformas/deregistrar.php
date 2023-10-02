<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$ids = json_decode($_POST['ids'], true);
$exito = true;
$stmt = $conn->prepare('DELETE FROM plataformasUsuario WHERE idUsuario=? AND idPlataformas=?');
foreach($ids as $idPlataformas){
	$stmt->bind_param('ii', $_SESSION['id'], $idPlataformas);
	$exito = $exito && $stmt->execute();
}
echo json_encode(array('exito' => $exito));