<style type="text/css">
	.grid-container {
    display: grid;
    grid-template-columns: 1fr 0.5fr;
    grid-gap: 20px;
}
</style>
<?php 
	$linha = $consulta_atendimento;
	$tam = mysqli_num_rows($linha);
?>
<div class="grid-container">

    <div class="grid-child purple" style="background-color:#CF875B;margin-left: 10px;">
        <form id="containermenu" autocomplete="off" method="post" action="processa_atendimento.php" style="margin-left: 15px;">
			<br><label style="font-size: 20px"><?php echo 'ATENDIMENTO #'.$tam + 1; ?></label><br><br>
				<label>Data registro: </label>
				<?php 
					date_default_timezone_set('America/Fortaleza');
					$date = date('m/d/Y H:i:s', time());
				?>
				<input type="text" name="data_registro" value="<?php echo $date; ?>" disabled>
				<label>Data final: </label> 	
				<input type="text" name="data_finalizacao" disabled>
				<label>Status: </label>
				<input type="text" name="status" id="status" value="Aberto" readonly><br><br>
				<label>Cliente: </label>
				<select name="clientes" id="clientes">
					<option value="">Selecione Cliente</option>
					<?php while($linha = mysqli_fetch_array($consulta_clientes)) { ?>

						<option value="<?php echo $linha['cpf_cliente'];?>">
							<?php echo $linha['nome_cliente']; ?>
						</option>
					<?php } ?>		
				</select>
				<label>Telefone: </label>
				<input type="text" name="telefone_cliente" id="telefone" value="">
				<label>Modelo do veículo: </label>
				<select name="modelos" id="modelos">
					<option>Selecione Modelo</option>
					<?php while ($linhaM = mysqli_fetch_array($consulta_marca)){ ?>
						<optgroup label="<?php echo $linhaM['nome_marca']; ?>">
							<?php while ($linhaX = mysqli_fetch_array($consulta_modelo)){ ?>
								<?php if ($linhaM['id_marca'] == $linhaX['marca_veiculo']) { ?>
									<option value="<?php echo $linhaX['nome_veiculo'];?>">
										<?php echo $linhaX['nome_veiculo'];?>
									</option> 
								<?php } ?>
							<?php } ?>
					<?php mysqli_data_seek($consulta_modelo, 0); ?>
					<?php } ?>
						</optgroup>
				</select><br><br>
				<label>Placa do Veículo: </label>
				<input type="text" name="placa_veiculo" value="">
				<label>Cep: </label>
				<input type="text" name="rua" id="cep" value=""><br><br>
				<label>Logradouro: </label>
				<input type="text" name="logradouro" id="logradouro" size="30" value="">
				<label>Número: </label>
				<input type="text" name="numero" id="numero" value="">
				<label>Cidade: </label>
				<input type="text" name="cidade" id="cidade" value=""><br><br>
				<label>Complemento: </label>
				<input type="text" name="complemento" id="complemento" value="">
				<label>Bairro: </label>
				<input type="text" name="bairro" id="bairro" value="">
				<label>Estado: </label>
				<input type="text" name="complemento" id="estado" value=""><br><br>
				<input id="confirma" type="submit" value="FINALIZAR">
				<a href="">
					<input type="button" name="cancelar" value="CANCELAR">
				</a>
				<a href="">
					<input type="button" name="salvar" value="SALVAR">
				</a>
		</form>
    </div>

    <div class="grid-child green" style="background-color:green;">
    	<div style="margin-left:10px">
        	<form><br>
        		<label style="font-size: 20px">SERVIÇOS</label><br><br>
        		<input class="btn" onclick="" type="button" name="add_servico" value="ADICIONAR SERVICO"><br><br>
        		<table  id="tabela_cliente" style="border: 1px solid black; width: 90%;background-color: #ccc;text-align: center"	>
        			<thead>
        					<tr>
        						<th>Serviço</th>
        						<th>Valor</th>
        						<th>    </th>
        					</tr>
        			</thead>
        			<tbody>
        			</tbody>
        		</table>
        	</form><br><br>
        	<label>Total: </label>
        	<input type="text" name="valor" value="R$ 0.00">
        </div>
    </div>

<div class="modal-container">
	<div id="modal" class="modal">
		<label>Serviços Disponíveis</label>
		<button class="fechar">X</button>
		<div>
			<br>
		<table style="border: 1px solid black;background-color: #ccc;margin-left:22%">
    			<thead>
    					<tr>
    						<th>Serviço</th>
    						<th>Valor</th>
    						<th>    </th>
    					</tr>
    			</thead>
    			<tbody>
    		<?php 
			while($linha = mysqli_fetch_array($consulta_servicos)){
				echo '<tr><td >'.$linha['nome_servico'].'</td>';
				echo '<td>'.$linha['valor_servico'].'</td>';
				echo '<td><button id="servico '.$linha['nome_servico'].'">Selecionar</button></td></tr>';
			?>				
			<?php } ?>
    			</tbody>
    		</table>
		</div>
	</div>
</div>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/script2.js"></script>