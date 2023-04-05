<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('SELECT * FROM videojuegos WHERE eliminado=0');
$stmt->execute();
$res = $stmt->get_result();
$videojuegos = [];
while($row = $res->fetch_assoc())
	array_push($videojuegos, $row);
echo json_encode(array('exito' => !empty($videojuegos), 'videojuegos' => $videojuegos));