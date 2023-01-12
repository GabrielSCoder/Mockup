<?php


include 'db.php';

$nome_marca = $_POST['nome_marca'];
$id_marca = $_POST['id_marca'];

$querymarca = "UPDATE marca_carro SET nome_marca = '$nome_marca' WHERE id_marca = $id_marca ";

mysqli_query($conexao,$querymarca);

header('location:index.php?pagina=menu');