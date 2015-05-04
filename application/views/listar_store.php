<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>lista de stores dentro de la base de datos.</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="lista">
		<ul>
			<?= isset($this->storelist) ? $this->storelist : '<li>NO HAY RESULTADOS EN LA LISTA.</li>';?>
		</ul>
	</div>
</body>
<script>
	function _removeStore($store){
		$.ajax({
			type 	: 'POST',
			url  	: 'eliminar/'+$store,
			success : function(data){
				window.location.reload();
			}
		});

	}
</script>
</html>