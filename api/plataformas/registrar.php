<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
sesion_bloqueo();
$ids = json_decode($_POST['ids'], true);
$exito = true;
$stmt = $conn->prepare('INSERT IGNORE INTO plataformasUsuario(idUsuario, idPlataforma) VALUES(?, ?)');
foreach ($ids as $idPlataforma){
	$stmt->bind_param('ii', $_SESSION['id'], $idPlataforma);
	$exito = $exito && $stmt->execute();
}
if(isset($_SESSION['noterminado']))
	$_SESSION['noterminado'] = 'videojuegos';
echo json_encode(array('exito' => $exito));