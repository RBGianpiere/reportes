<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>creacion de store procedure</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="createStoreProcedure/subir" method="POST" id="form_subir_store" name="form_subir_store">
		<div>
			<label for="">Nombre</label>
			<input name="store_name" id="store_name" type="text" />
		</div>

		<div>
			<label for="">Params</label>
			<input type="text" name="store_params" id="store_params" />
		</div>

		<div>
			<div>BEGIN</div>
			<textarea name="store" id="store" cols="70" rows="10" placeholder="pega aqui el codigo que esta dentro del BEGIN."></textarea>
			<div>END</div>
		</div>

		<br>
		<button id="subir_codigo">subir tu codigo.</button>
	</form>
</body>

<script>
	$('#subir_codigo').on('click',function(e){
		e.preventDefault();
		$.ajax({
			type	: 'POST',
			data	: $('#form_subir_store').serialize(),
			url		: $('#form_subir_store').attr('action'),
			success	: function(data){
				
			},
			error 	: function(){
				console.error('ERROR AJAX');
			}
		});

	});
</script>
</html>