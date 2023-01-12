<?php 
	include 'db.php';

	include 'header.php';
	
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
		}
	else{
		$pagina = 'home';
	}

	switch($pagina){
		case 'menu': include 'views/menu.php';
		break;
		case 'clientes': include 'views/clientes.php';
		break;
		case 'inserir_cliente': include 'views/insercao_cliente.php';
		break;
		case 'inserir_marca': include 'views/inserir_marca.php';
		break;
		case 'consultar': include 'views/consulta_cep.php';
		break;
		case 'teste': include 'views/teste.php';
		break;
		case 'teste2': include 'views/teste2.php';
		break;
		case 'teste3': include 'views/teste3.php';
		break;
		case 'marcas': include 'views/marcas.php';
		break;
		case 'modelos': include 'views/modelos.php';
		break;
		case 'inserir_modelo': include 'views/inserir_modelo.php';
		break;
		case 'servicos': include 'views/servicos.php';
		break;
		case 'inserir_servico': include 'views/inserir_servico.php';
		break;
		case 'atendimento': include 'views/tabela_atendimento.php';
		break;
		case 'inserir_atendimento': include 'views/inserir_atendimento.php';
		break;
		default: include 'home.php'; 
		break;
	}

	include 'footer.php';

