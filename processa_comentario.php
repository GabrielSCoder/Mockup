<?php
	
	include "db.php";

	header('Content-Type: application/json');

	$name = $_POST['name'];
	$comentario = $_POST['comment'];

	$query = "INSERT INTO comentario(nome_comentario,cmt_comentario) VALUES ('$name','$comentario')";

	if (mysqli_query($conexao,$query)){
		echo json_encode('deu certo');
	} else {
		echo json_encode('deu ruim');
	}
