<?php include_once '../control/user_logado.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Bem vindo a Página Inicial <?php echo "Michael"; ?></title>
	<meta charset="UTF-8">
	<meta name="author" content="MBSoftware">
	<meta name="reply-to" content="michaelbatistasousa@gmail.com">
	<link rel="icon" href="../lib/img/logo.png" type="image/x-icon" />
	<link rel="stylesheet" href="../lib/css/assets/bootstrap.min.css">
	<link rel="stylesheet" href="../lib/css/assets/font-awesome.min.css">
	<link rel="stylesheet" href="../lib/css/assets/style.css">

	<script src="../lib/src/jquery.js" type="text/javascript"></script>
</head>
<body>

	<?php include "../includes/menu.html"; ?>
	<!--conteudo-->
	<div class="container">
		<h1>
			Fornecedores
			<a href="" class="btn btn-info" style="float:right;" data-toggle="tooltip" data-placement="top" title="novo cadastro"><i class="glyphicon glyphicon-plus"></i></a>
		</h1>
		<hr>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th class="info">Nome/razão social</th>
					<th class="info">Cpf/cnpj</th>
					<th class="info">Telefone</th>
					<th class="info">Email</th>
					<th class="info">Ações</th>
				</tr>
				<tr>
					<td>sem registro</td>
					<td>sem registro</td>
					<td>sem registro</td>
					<td>sem registro</td>
					<td>
						<button class="btn btn-default" data-toggle="tooltip" data-placement="top" title="editar fornecedores"><i class="glyphicon glyphicon-pencil"></i></button>
						<button class="btn btn-danger"data-toggle="tooltip" data-placement="top" title="remover fornecedores"><i class="glyphicon glyphicon-remove"></i></button>
					</td>
				</tr>
			</table>
		</div>

	</div>
 <script src="../lib/src/bootstrap.min.js" type="text/javascript"></script>
 <script src="../lib/src/script.js" type="text/javascript"></script>
</body>
</html>