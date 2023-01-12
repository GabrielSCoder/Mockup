<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "lava_jato";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);



$query_cliente = "SELECT * FROM cliente";
$query_modelo = "SELECT * FROM modelo_carro";
$query_marca = "SELECT * FROM marca_carro";
$query_endereco = "SELECT * FROM enderecos";
$query_endereco_custom = "SELECT * FROM endereco_custom";
$query_marcas_modelos = "SELECT modelo_carro.id_veiculo,modelo_carro.nome_veiculo,marca_carro.nome_marca from modelo_carro INNER JOIN marca_carro on modelo_carro.marca_veiculo = marca_carro.id_marca";
$query_marcas_id_modelos = "SELECT modelo_carro.nome_veiculo,marca_carro.nome_marca,marca_carro.id_marca from modelo_carro INNER JOIN marca_carro on modelo_carro.marca_veiculo = marca_carro.id_marca";
$query_servicos = "SELECT * FROM servico";
$query_atendimento = "SELECT * FROM atendimento";
$query_endereco_cpf = "SELECT endereco_custom.cpf_cliente, enderecos.id_endereco,enderecos.cep_endereco,enderecos.logradouro_endereco,enderecos.numero_endereco,enderecos.complemento_endereco,enderecos.localidade_endereco,enderecos.uf_endereco,enderecos.bairro_endereco from enderecos INNER JOIN endereco_custom on endereco_custom.id_endereco = enderecos.id_endereco";
$query_comentario = "SELECT * FROM comentario";

$consulta_clientes = mysqli_query($conexao, $query_cliente);
$consulta_enderecos = mysqli_query($conexao, $query_endereco);
$consulta_enderecos_custom = mysqli_query($conexao,$query_endereco_custom);
$consulta_marca = mysqli_query($conexao, $query_marca);
$consulta_marcas_modelos = mysqli_query($conexao,$query_marcas_modelos);
$consulta_modelo = mysqli_query($conexao, $query_modelo);
$consulta_marcas_id_modelos = mysqli_query($conexao,$query_marcas_id_modelos);
$consulta_servicos = mysqli_query($conexao, $query_servicos);
$consulta_atendimento = mysqli_query($conexao, $query_atendimento);
$consulta_endereco_cpf = mysqli_query($conexao,$query_endereco_cpf);
$consulta_comentario = mysqli_query($conexao, $query_comentario);