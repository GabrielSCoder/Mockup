<div class="container" style="text-align: center;">
	<label style="font-size: 25px;color:white">ATENDIMENTO</label>
</div>
<table id="tabela_marcas" style="border: 1px solid black; width: 100%;background-color: #ccc;text-align: center">  
	<thead>
	<tr>
		<th>Número</th>
		<th>Horário entrada</th>
		<th>Horário saída</th>
	</tr>
	</thead>
	<tbody>
	<?php 
			while($linha = mysqli_fetch_array($consulta_atendimento)){
				echo '<tr><td >'.$linha['id_atendimento'].'</td>';
	?>
		<td><a href="deleta_marca.php?id_marca=<?php echo $linha['data_inicio']; ?>">X</a></td></tr>
	<?php
				}
	?>
	</tbody>
</table>
<a href="?pagina=inserir_atendimento">
	<button type="button" style="margin:20px;color: white;background-color: red; font-size: 15px">ABRIR NOVO ATENDIMENTO</button>
</a>
