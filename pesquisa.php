<?php

header('Content-Type: application/json');

include 'db.php';

$id = $_POST['id'];

$query = "SELECT * FROM cliente where cpf_cliente = '$id'";

$query_endereco_cpf = "SELECT endereco_custom.cpf_cliente, enderecos.id_endereco,enderecos.cep_endereco,enderecos.logradouro_endereco,enderecos.numero_endereco,enderecos.complemento_endereco,enderecos.localidade_endereco,enderecos.uf_endereco,enderecos.bairro_endereco from enderecos INNER JOIN endereco_custom on endereco_custom.id_endereco = enderecos.id_endereco where endereco_custom.cpf_cliente = '$id'";

$pesquisa = mysqli_query($conexao,$query_endereco_cpf);
$pesquisa2 = mysqli_query($conexao,$query);


if(mysqli_num_rows($pesquisa2) >= 1){
	$name_line = "";
	while($linhaX = mysqli_fetch_array($pesquisa2)){
		$name_line = $linhaX;
		break;
	}
}


if(mysqli_num_rows($pesquisa) >= 1) {
	$current_line = "";
	while($linha = mysqli_fetch_array($pesquisa)){
		$current_line = $linha;
		break;
	}	
	$result = array_merge($current_line,$name_line);
	echo json_encode($result);
}
else{
	echo json_encode("deu ruim clã");
}