<script type="text/javascript">
    var valor;
    function onload() { 
        valor = document.getElementById('cep');
    }
    function print(){
        return valor.value;
    }
</script>

<?php 
	include 'db.php';
?>

<?php if(!isset($_GET['editar'] )) { ?>
	<body onload="onload();">
		<form id="containermenu" autocomplete="off" method="post" action="processa_cliente.php" style="text-align: center;background-color: gray;height: 350px;">
			<br><label style="text-align: center; font-size: 20px">INSERIR NOVO CLIENTE</label><br><br>
				<label>Nome:
				<input type="text" name="nome_cliente"></label><br>
				<label>Telefone:
				<input type="text" name="telefone_cliente"></label><br>
				<label>Cpf:
				<input type="text" name="cpf_cliente"></label><br>
				<script type="text/javascript" src="js/consulta_cep.js"></script>
				<label>Cep:
				<input name="cep" type="text" id="cep" value="" size="10" maxlength="8"/></label>
				<input type="button" name="botao-pesquisa" value="pesquisar" 
				onclick="pesquisacep(print());"><br />
				<label>Rua:
				<input name="rua" type="text" id="rua" size="60" /></label><br />
				<label>Complemento:
				<input name="complemento" type="text" id="complemento"></label>
				<label>Número:
				<input type="text" name="numero" value="" id="numero" size="4"></label><br>
				<label>Bairro:
				<input name="bairro" type="text" id="bairro" size="40" /></label><br />
				<label>Cidade:
				<input name="cidade" type="text" id="cidade" size="40" /></label><br />
				<label>Estado:
				<input name="uf" type="text" id="uf" size="2" /></label><br />
				<input id="confirma" type="submit" value="CONFIRMAR">
		</form>
	</body>

<?php } else { ?>

	<?php while($linha = mysqli_fetch_array($consulta_clientes)){ ?>
		<?php if ($linha['cpf_cliente'] == $_GET['editar']) { ?>
			<?php
				while($linhax = mysqli_fetch_array($consulta_enderecos_custom)){
					if ($linha['cpf_cliente'] == $linhax['cpf_cliente']){
						$endereco = $linhax['id_endereco'];
					}
				}
				$queryEnderecoX = "SELECT * FROM enderecos WHERE id_endereco = $endereco";
				$consultaZ = mysqli_query($conexao,$queryEnderecoX);
				while ($linhaz = mysqli_fetch_array($consultaZ)){
					if (mysqli_num_rows($consultaZ) == 1){
						$endereco = $linhaz;
						break;
					}
				}	
			 ?>
			<body onload="onload();">
				<form id="containermenu" autocomplete="off" method="post" action="altera_cliente.php" style="text-align: center;background-color: gray;height: 350px;">
					<br><label style="text-align: center; font-size: 20px"><?php echo $linha['nome_cliente'];  ?></label><br><br>
					<label>Nome:
					<input type="text" name="nome_cliente" value="<?php echo $linha['nome_cliente']; ?>"></label><br>
					<label>Telefone:
					<input type="text" name="telefone_cliente" value="<?php echo $linha['telefone_cliente']; ?>"></label><br>
					<label>Cpf:
					<input type="text" name="cpf_cliente" readonly="true" value="<?php  echo $linha['cpf_cliente']; ?>"></label><br>
					<script type="text/javascript" src="js/consulta_cep.js"></script>
					<label>Cep:
					<input name="cep" type="text" id="cep" value="<?php echo $endereco[1]; ?>" size="10" maxlength="9"/></label>
					<input type="button" name="botao-pesquisa" value="pesquisar" 
					onclick="pesquisacep(print());"><br />
					<label>Rua:
					<input name="rua" type="text" id="rua"  value="<?php echo $endereco[2]; ?>" size="60" /></label><br />
					<label>Complemento:
					<input name="complemento" type="text" id="complemento" value="<?php echo $endereco[4]; ?>"></label><br>
					<label>Número:
					<input type="text" name="numero" id="numero" value="<?php echo $endereco[3]; ?>" ></label><br>
					<label>Bairro:
					<input name="bairro" type="text" id="bairro" size="40" value="<?php echo $endereco[7]; ?>"/></label><br />
					<label>Cidade:
					<input name="cidade" type="text" id="cidade" size="40" value="<?php echo $endereco[5]; ?>"/></label><br />
					<label>Estado:
					<input name="uf" type="text" id="uf" size="2" value="<?php echo $endereco[6]; ?>" /></label><br />
					<input type="hidden" name="id_endereco" value="<?php echo $endereco[0]; ?>">
					<input id="confirma" type="submit" value="EDITAR">
				</form>
			</body>
		<?php } ?>
	<?php } ?>
<?php } ?>