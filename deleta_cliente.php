<?php

include 'db.php';

$cpf_cliente = $_GET['cpf_cliente'];

$queryE = "SELECT id_endereco FROM endereco_custom WHERE cpf_cliente = $cpf_cliente";

$consultaA = mysqli_query($conexao,$queryE);

$id = "";

while($linha = mysqli_fetch_array($consultaA)){
	$id = $linha['id_endereco'];
	break;
}

$queryDE = "DELETE FROM endereco_custom WHERE id_endereco = $id";

mysqli_query($conexao,$queryDE);

$queryD = "DELETE FROM cliente where cpf_cliente = $cpf_cliente";

mysqli_query($conexao,$queryD);

$queryED = "DELETE FROM enderecos WHERE id_endereco = $id";

mysqli_query($conexao,$queryED);

header('location:index.php?pagina=menu');
