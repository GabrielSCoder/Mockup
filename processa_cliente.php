<?php 

include 'db.php';

$nome_cliente = $_POST['nome_cliente'];
$telefone_cliente = $_POST['telefone_cliente'];
$cpf_cliente = $_POST['cpf_cliente'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$rua = $_POST['rua'];
$complemento = $_POST['complemento'];
$numero = $_POST['numero'];


$queryEndereco = "INSERT INTO enderecos(cep_endereco, logradouro_endereco,numero_endereco,complemento_endereco, localidade_endereco, uf_endereco, bairro_endereco) VALUES ($cep, '$rua', $numero, '$complemento', '$cidade', '$uf','$bairro')";

$queryCliente = "INSERT INTO cliente(nome_cliente,cpf_cliente,telefone_cliente) VALUES ('$nome_cliente', 
	$cpf_cliente, $telefone_cliente)";

mysqli_query($conexao,$queryEndereco);
mysqli_query($conexao,$queryCliente);

$queryT = "SELECT * FROM enderecos";
$consulta = mysqli_query($conexao,$queryT);

$id = 0;

while($linha = mysqli_fetch_array($consulta)){
	if ($linha['numero_endereco'] == $numero){
		echo $linha['id_endereco'];
		$id = $linha['id_endereco']; 
	}
}

mysqli_data_seek($consulta, 0);

$queryCustom = "INSERT INTO endereco_custom(cpf_cliente, id_endereco) VALUES ($cpf_cliente, $id)";
mysqli_query($conexao,$queryCustom);

header('location:index.php?pagina=clientes');