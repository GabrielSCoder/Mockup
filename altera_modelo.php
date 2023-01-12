<?php


include 'db.php';

$nome_veiculo = $_POST['nome_veiculo'];
$id_veiculo = $_POST['id_veiculo'];
$marca_veiculo = $_POST['marcas'];

$current_line = '';

while($linha = mysqli_fetch_array($consulta_marcas_id_modelos)){
	if ($linha['nome_marca'] == $marca_veiculo){
		$current_line = $linha;
		break;
	}
}

$query = "UPDATE modelo_carro SET nome_veiculo = '$nome_veiculo', marca_veiculo = $current_line[2] WHERE
	id_veiculo = $id_veiculo";

mysqli_query($conexao,$query);

header('location:index.php?pagina=menu');