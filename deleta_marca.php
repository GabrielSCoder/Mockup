<?php

include 'db.php';

$id_marca = $_GET['id_marca'];

$queryE = "DELETE FROM marca_carro where id_marca = $id_marca";

mysqli_query($conexao,$queryE);

header('location:index.php?pagina=menu');
