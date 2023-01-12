<?php if(!isset($_GET['editar'] )) { ?>
	<body onload="onload();">
		<form id="containermenu" autocomplete="off" method="post" action="processa_servico.php" style="text-align: center;background-color: gray;height: 350px;">
			<br><label style="text-align: center; font-size: 20px">INSERIR SERVIÇO</label><br><br>
				<label>Nome:
				<input type="text" name="nome_servico"></label><br>
				<label>
				<textarea name="descricao" rows="4" cols="50" placeholder="Descrição..."></textarea></label><br>
				<label>Valor:
				<input type="text" name="valor_unitario"></label><br>
				<input id="confirma" type="submit" value="CONFIRMAR">
		</form>
	</body>

<?php } else { ?>

	<?php while($linha = mysqli_fetch_array($consulta_servicos)){ ?>
		<?php if ($linha['id_servico'] == $_GET['editar']) { ?>
				<form id="containermenu" autocomplete="off" method="post" action="altera_servico.php" style="text-align: center;background-color: gray;height: 350px;">
					<br><label style="text-align: center; font-size: 20px">
						<?php echo $linha['nome_servico'];?></label><br><br>
					<label>Nome:
						<input type="text" name="nome_servico" value="<?php echo $linha['nome_servico']; ?>"></label><br>
					<label>Descrição:
					<textarea name="descricao" rows="4" cols="50"><?php echo $linha['descricao_servico']; ?></textarea></label><br>
					<input type="hidden" name="id_servico" value="<?php echo $linha['id_servico']; ?>">
					<label>Valor:
					<input type="text" name="valor_unitario" value="<?php echo $linha['valor_servico']; ?>"></label><br>
					<input id="confirma" type="submit" value="EDITAR">
				</form>
		<?php } ?>
	<?php } ?>
<?php } ?>