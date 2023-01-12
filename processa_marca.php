<?php 

include 'db.php';

$nome_marca = $_POST['nome_marca'];

$query = "INSERT INTO marca_carro(nome_marca) VALUES ('$nome_marca')";

mysqli_query($conexao,$query);

header('location:index.php?pagina=menu');
