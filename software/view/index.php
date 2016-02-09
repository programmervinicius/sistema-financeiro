<?php include_once '../control/user_logado.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Bem vindo a Página Inicial <?php echo $soft_name; ?></title>
	<meta charset="UTF-8">
	<meta name="author" content="MBSoftware">
	<meta name="reply-to" content="michaelbatistasousa@gmail.com">
	<!--all css-->
	<link rel="icon" href="../lib/img/logo.png" type="image/x-icon" />
	<link rel="stylesheet" href="../lib/css/assets/bootstrap.min.css">
	<link rel="stylesheet" href="../lib/css/assets/font-awesome.min.css">
	<link rel="stylesheet" href="../lib/css/assets/style.css">
	<!--jquery-->
	<script src="../lib/src/jquery.js" type="text/javascript"></script>
</head>
<body>
	<?php include "../includes/menu.html"; ?>
	<!--conteudo-->
	<div class="container">
		<h1>Relatórios Gerais</h1>
		<hr>
		<h4>Fluxo Financeiro do Mês Atual</h4>
		
		<!--other line-->
		<div class="row">
			<div class="col-md-4">
				<div class="well">
					<h4 class="text-center">Entradas</h4>
					<p class="text-center"><strong>R$ 1.000</strong></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="well">
					<h4 class="text-center">Saídas</h4>
					<p class="text-center"><strong>R$ 1.000</strong></p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="well">
					<h4 class="text-center">Saldo</h4>
					<p class="text-center"><strong>R$ 0</strong></p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<hr>
		<h4>Infromações do Financeiro</h4>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<th class="info">tipo</th>
					<th class="info">Vencidas</th>
					<th class="info">Vencem Hoje</th>
					<th class="info">Pagas</th>
				</tr>
				<tr>
					<td>receitas</td>
					<td>150</td>
					<td>0,00</td>
					<td>2.000</td>
				</tr>
			</table>
		</div>
	</div>
 </div>
 <script src="../lib/src/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>