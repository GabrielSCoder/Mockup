<?php 

include 'db.php';

$nome_servico = $_POST['nome_servico'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor_unitario'];

$query = "INSERT INTO servico(nome_servico,descricao_servico,valor_servico) VALUES ('$nome_servico','$descricao'
	,$valor)";

mysqli_query($conexao,$query);

header('location:index.php?pagina=menu');
