<?php


include 'db.php';

$nome_servico = $_POST['nome_servico'];
$id_servico = $_POST['id_servico'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor_unitario'];

$querymarca = "UPDATE servico SET nome_servico = '$nome_servico',descricao_servico = '$descricao',valor_servico = $valor WHERE id_servico = $id_servico ";

mysqli_query($conexao,$querymarca);

header('location:index.php?pagina=menu');