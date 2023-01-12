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
$id_endereco = $_POST['id_endereco'];

$queryEndereco = "UPDATE enderecos SET cep_endereco = $cep, logradouro_endereco = '$rua',numero_endereco = $numero,complemento_endereco = '$complemento', localidade_endereco = '$cidade', uf_endereco = '$uf', bairro_endereco = '$bairro' WHERE id_endereco = $id_endereco";

$queryCliente = "UPDATE cliente SET nome_cliente = '$nome_cliente', telefone_cliente = $telefone_cliente WHERE cpf_cliente = $cpf_cliente";

mysqli_query($conexao,$queryEndereco);
mysqli_query($conexao,$queryCliente);


header('location:index.php?pagina=cardapio');