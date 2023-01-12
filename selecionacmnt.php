<?php

	include 'db.php';

	header('Content-Type: application/json');

	$result = $consulta_comentario;

	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

	echo json_encode($rows);