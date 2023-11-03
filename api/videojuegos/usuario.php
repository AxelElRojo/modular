<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
sesion_bloqueo();
$stmt = $conn->prepare('SELECT idVideojuego AS id, videojuegos.nombre FROM videojuegosUsuario JOIN videojuegos ON videojuegosUsuario.idVideojuego = videojuegos.id WHERE idUsuario=?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$res = $stmt->get_result();
$videojuegos = [];
while($row = $res->fetch_assoc())
	array_push($videojuegos, $row);
echo json_encode(array('exito' => $stmt->error == "", 'videojuegos' => $videojuegos));