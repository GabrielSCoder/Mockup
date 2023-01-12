<div class="container" style="text-align: center;">
	<label style="font-size: 25px;color:white">SERVIÇOS</label>
</div>
<table id="tabela_marcas" style="border: 1px solid black; width: 100%;background-color: #ccc;text-align: center">  
	<thead>
	<tr>
		<th>Nome</th>
		<th>Valor Unitário</th>
		<th>Descrição</th>
		<th>Editar</th>
		<th>Excluir</th>
	</tr>
	</thead>
	<tbody>
	<?php 
			while($linha = mysqli_fetch_array($consulta_servicos)){
				echo '<tr><td >'.$linha['nome_servico'].'</td>';
				echo '<td>'.$linha['valor_servico'].'</td>';
	?>

		<td><div class="bat"><button class="btn" id="<?php echo $linha['id_servico']; ?>" onclick="">Clique aqui</button></div></td>
		<td><a href="?pagina=inserir_servico&editar=<?php echo $linha['id_servico']; ?>">Editar</a></td>
		<td><a href="deleta_servico.php?id_servico=<?php echo $linha['id_servico']; ?>">X</a></td></tr>
	<?php
				}
	?>
	</tbody>
</table>
<a href="?pagina=inserir_servico">
	<button type="button" style="margin:20px;color: white;background-color: red; font-size: 15px">INSERIR SERVIÇO</button>
</a>

<div id="modal" class="modal">
	<button class="fechar">X</button>

</div>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/script.js"></script>
<script src="js/script4.js"></script>