<?php 

include 'db.php';

$marca = $_POST['marcas'];

$nome_modelo = $_POST['nome_veiculo'];

$currente_line = "";

while ($linha = mysqli_fetch_array($consulta_marca)){
	if ($linha['nome_marca'] == $marca){
		$currente_line = $linha;
		break;
	} 
}

$id_marca = $currente_line[0];

$query = "INSERT INTO modelo_carro(nome_veiculo,marca_veiculo) VALUES ('$nome_modelo',$id_marca)";

mysqli_query($conexao,$query);

header('location:index.php?pagina=menu');
