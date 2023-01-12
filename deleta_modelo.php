<?php

include 'db.php';

$id_veiculo = $_GET['id_modelo'];

$queryE = "DELETE FROM modelo_carro where id_veiculo = $id_veiculo";

mysqli_query($conexao,$queryE);

header('location:index.php?pagina=menu');
