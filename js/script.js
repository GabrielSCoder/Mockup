$(function(){

	var cpf = "";

	$('#cpf').on('blur',function(){
		var cpf = $('#cpf').val();

		$.ajax({
			url:"pesquisa.php",
			method: 'POST',
			data: {id: cpf},
			dataType: 'json',
		}).done(function(result){
			$('#name').val(result.nome_cliente);
			$('#telefone').val(result.telefone_cliente);
			$('#cep').val(result.cep_endereco);
		})
	});
});

/*
$('#forma').submit(function(e){
	e.preventDefault();

	var u_id = $('#id').val();

	$.ajax({
		url:'pesquisa.php',
		method: 'POST',
		data: {id:u_id},
		dataType: 'json'
	}).done(function(result){
		console.log(result);
	});
});

*/