<?php if(!isset($_GET['editar'] )) { ?>
	<body onload="onload();">
		<form id="containermenu" autocomplete="off" method="post" action="processa_marca.php" style="text-align: center;background-color: gray;height: 350px;">
			<br><label style="text-align: center; font-size: 20px">INSERIR MARCA</label><br><br>
				<label>Nome Marca:
				<input type="text" name="nome_marca"></label><br>
				<input id="confirma" type="submit" value="CONFIRMAR">
		</form>
	</body>

<?php } else { ?>

	<?php while($linha = mysqli_fetch_array($consulta_marca)){ ?>
		<?php if ($linha['id_marca'] == $_GET['editar']) { ?>
				<form id="containermenu" autocomplete="off" method="post" action="altera_marca.php" style="text-align: center;background-color: gray;height: 350px;">
					<br><label style="text-align: center; font-size: 20px">
						<?php echo $linha['nome_marca'];?></label><br><br>
					<label>Nome Marca:
					<input type="text" name="nome_marca" value="<?php echo $linha['nome_marca']; ?>"></label><br>
					<input type="hidden" name="id_marca" value="<?php echo $linha['id_marca']; ?>">
					<input id="confirma" type="submit" value="EDITAR">
				</form>
		<?php } ?>
	<?php } ?>
<?php } ?>