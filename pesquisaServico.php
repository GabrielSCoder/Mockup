<?php

	include 'db.php';

	header('Content-Type: application/json');

	$id = $_POST['id'];

	$query = "SELECT descricao_servico FROM servico WHERE id_servico = $id";

	$consulta_desc = mysqli_query($conexao, $query); 

	if (mysqli_num_rows($consulta_desc) == 1){
		
		$rows = mysqli_fetch_all($consulta_desc, MYSQLI_ASSOC);

		echo json_encode($rows);
	} else {
		echo json_encode('Deu ruim');
	}