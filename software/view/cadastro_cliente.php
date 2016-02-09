<?php include_once '../control/user_logado.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>cadastro de novos clientes</title>
	<meta charset="UTF-8">
	<meta name="author" content="MBSoftware">
	<meta name="reply-to" content="michaelbatistasousa@gmail.com">
	<link rel="icon" href="../lib/img/logo.png" type="image/x-icon" />
	<link rel="stylesheet" href="../lib/css/assets/bootstrap.min.css">
	<link rel="stylesheet" href="../lib/css/assets/font-awesome.min.css">
	<link rel="stylesheet" href="../lib/css/assets/style.css">

	<style>
	
			@media(max-width:360px){
				.form-control{
					margin-top: 10px;
				}
			}
		
	</style>

	<script src="../lib/src/jquery.js" type="text/javascript"></script>
	<script src="../lib/src/mask.js" type="text/javascript"></script>
</head>
<body>

	<?php include "../includes/menu.html"; ?>
	<!--conteudo-->
	<div class="container">
		<h1>Cadastro de Clientes</h1>
		<hr>
		<?php include '../includes/form_cadastrar_cliente.html'; ?>
	</div>

	<script>
		$("#cpf").mask("999.999.999-99");
		$("#cep").mask("99999-999");
		$("#telefone").mask("(99)99999-9999");
		$("#rg").mask("999999999999");
		$("#cnpj").mask("99.999.999/9999-99");
	</script>
 <script src="../lib/src/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>