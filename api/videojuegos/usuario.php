<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
sesion_bloqueo();
$stmt = $conn->prepare('SELECT idVideojuego FROM videojuegosUsuario WHERE idUsuario=?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$res = $stmt->get_result();
$videojuegos = [];
while($row = $res->fetch_assoc())
	array_push($videojuegos, $row['idVideojuego']);
echo json_encode(array('exito' => !empty($videojuegos), 'videojuegos' => $videojuegos));