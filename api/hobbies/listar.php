<?php
require_once('../.includes/db_conn.inc.php');
require_once('../.includes/session.inc.php');
header('Content-Type: application/json');
$stmt = $conn->prepare('SELECT id, nombre FROM hobbies WHERE eliminado=0');
$stmt->execute();
$res = $stmt->get_result();
$hobbies = [];
while($row = $res->fetch_assoc())
	array_push($hobbies, $row);
echo json_encode(array('exito' => !empty($hobbies), 'hobbies' => $hobbies));