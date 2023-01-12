<?php if(!isset($_GET['editar'] )) { ?>
	<body onload="onload();">
		<form id="containermenu" autocomplete="off" method="post" action="processa_modelo.php" style="text-align: center;background-color: gray;height: 350px;">
			<br><label style="text-align: center; font-size: 20px">INSERIR MODELO</label><br><br>
				<label>Nome Modelo:
				<input type="text" name="nome_veiculo"></label><br>
				<label>Marca:
					<select id="marcas" name="marcas">
						<?php while($linha = mysqli_fetch_array($consulta_marca)){ ?>
							<option value="<?php echo $linha['nome_marca']; ?>">
								<?php echo $linha['nome_marca']; ?></option>
						<?php } ?>
					</select>
				</label><br>
				<input id="confirma" type="submit" value="CONFIRMAR">
		</form>
	</body>

<?php } else { ?>

	<?php while($linha = mysqli_fetch_array($consulta_modelo)){ ?>
		<?php if ($linha['id_veiculo'] == $_GET['editar']) { ?>
				<form id="containermenu" autocomplete="off" method="post" action="altera_modelo.php" style="text-align: center;background-color: gray;height: 350px;">
					<br><label style="text-align: center; font-size: 20px">
						<?php echo $linha['nome_veiculo'];?></label><br><br>
					<label>Nome Modelo:
					<input type="text" name="nome_veiculo" value="<?php echo $linha['nome_veiculo']; ?>"></label><br>
					<input type="hidden" name="id_veiculo" value="<?php echo $linha['id_veiculo']; ?>">
					<label>Marca:
					<select id="marcas" name="marcas">
						<?php while($linhax = mysqli_fetch_array($consulta_marca)){ ?>
							<?php if ($linhax['id_marca'] == $linha['marca_veiculo']){?>
								<option value="<?php echo $linhax['nome_marca']; ?>" selected>
								<?php echo $linhax['nome_marca'];?></option>	
							<?php } else { ?>
							<option value="<?php echo $linhax['nome_marca']; ?>">
								<?php echo $linhax['nome_marca']; ?></option>
							<?php } ?>
							<?php } ?>
					</select>
				</label>
					<input id="confirma" type="submit" value="EDITAR">
				</form>
	<?php } ?>
<?php } ?>
<?php } ?>