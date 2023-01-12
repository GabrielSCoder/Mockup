<?php

include 'db.php';

$id_servico = $_GET['id_servico'];

$queryE = "DELETE FROM servico where id_servico = $id_servico";

mysqli_query($conexao,$queryE);

header('location:index.php?pagina=menu');
