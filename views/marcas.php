<div class="container" style="text-align: center;">
	<label style="font-size: 25px;color:white">MARCAS</label>
</div>
<table id="tabela_marcas" style="border: 1px solid black; width: 100%;background-color: #ccc;text-align: center">  
	<thead>
	<tr>
		<th>NOME DA MARCA</th>
		<th>EDITAR</th>
		<th>EXCLUIR</th>
	</tr>
	</thead>
	<tbody>
	<?php 
			while($linha = mysqli_fetch_array($consulta_marca)){
				echo '<tr><td >'.$linha['nome_marca'].'</td>';
	?>
		<td><a href="?pagina=inserir_marca&editar=<?php echo $linha['id_marca']; ?>">Editar</a></td>
		<td><a href="deleta_marca.php?id_marca=<?php echo $linha['id_marca']; ?>">X</a></td></tr>
	<?php
				}
	?>
	</tbody>
</table>
<a href="?pagina=inserir_marca">
	<button type="button" style="margin:20px;color: white;background-color: red; font-size: 15px">INSERIR MARCA</button>
</a>
