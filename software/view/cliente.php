<?php include_once '../control/user_logado.php' ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Situação do Cliente</title>
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
			Clientes
			<a href="cadastro_cliente.php" class="btn btn-info" style="float:right;" data-toggle="tooltip" data-placement="top" title="novo cadastro"><i class="glyphicon glyphicon-plus"></i></a>
		</h1>
		<hr>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th class="info">Nome/razão social</th>
					<th class="info">Cpf/cnpj</th>
					<th class="info">Telefone</th>
					<th class="info">Ações</th>
				</tr>
				<tr>
					<td>josé</td>
					<td>614.006.203-06</td>
					<td>(85)98915-3375</td>
					<td>
						<a href="" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="editar clientes"><span class="fa fa-pencil"></span></a>
						<a href="" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="remover clientes"><span class="fa fa-remove"></span></a>
					</td>
				</tr>
			</table>
		</div>
	</div>
 </div>
 <script src="../lib/src/bootstrap.min.js" type="text/javascript"></script>
 <script src="../lib/src/script.js" type="text/javascript"></script>
</body>
</html>