<div class="container" style="text-align: center;">
	<label style="font-size: 25px;color:white">MARCAS</label>
</div>
<table id="tabela_marcas" style="border: 1px solid black; width: 100%;background-color: #ccc;text-align: center">  
	<thead>
	<tr>
		<th>NOME DO MODELO</th>
		<th>MARCA</th>
		<th>EDITAR</th>
		<th>EXCLUIR</th>
	</tr>
	</thead>
	<tbody>
	<?php 
			while($linha = mysqli_fetch_array($consulta_marcas_modelos)){
				echo '<tr><td >'.$linha['nome_veiculo'].'</td>';
				echo '<td>'.$linha['nome_marca'].'</td>';
	?>
		<td><a href="?pagina=inserir_modelo&editar=<?php echo $linha['id_veiculo']; ?>">Editar</a></td>
		<td><a href="deleta_modelo.php?id_modelo=<?php echo $linha['id_veiculo']; ?>">X</a></td></tr>
	<?php
				}
	?>
	</tbody>
</table>
<a href="?pagina=inserir_modelo">
	<button type="button" style="margin:20px;color: white;background-color: red; font-size: 15px">INSERIR MODELO</button>
</a>
