<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$ids = json_decode($_POST['ids'], true);
$exito = true;
$stmt = $conn->prepare('INSERT IGNORE INTO videojuegosUsuario(idUsuario, idVideojuego) VALUES(?, ?)');
foreach ($ids as $idVideojuego){
	$stmt->bind_param('ii', $_SESSION['id'], $idVideojuego);
	$exito = $exito && $stmt->execute();
}
echo json_encode(array('exito' => $exito));