<div class="container" style="text-align: center;">
	<label style="font-size: 25px;color:white">CLIENTES</label>
</div>
<table id="tabela_cliente" style="border: 1px solid black; width: 100%;background-color: #ccc;text-align: center">  
	<thead>
	<tr>
		<th>Cliente</th>
		<th>Telefone</th>
		<th>CPF</th>

	</tr>
	</thead>
	<tbody>
	<?php 
			while($linha = mysqli_fetch_array($consulta_clientes)){
				echo '<tr><td >'.$linha['nome_cliente'].'</td>';
				echo '<td>'.$linha['telefone_cliente'].'</td>';
				echo '<td>'.$linha['cpf_cliente'].'</td>';
	?>
		<td><a href="?pagina=inserir_cliente&editar=<?php echo $linha['cpf_cliente']; ?>">Editar</a></td>
		<td><a href="deleta_cliente.php?cpf_cliente=<?php echo $linha['cpf_cliente']; ?>">X</a></td></tr>
	<?php
				}
	?>
	</tbody>
</table>
<a href="?pagina=inserir_cliente">
	<button type="button" style="margin:20px;color: white;background-color: red; font-size: 15px">INSERIR CLIENTE</button>
</a>