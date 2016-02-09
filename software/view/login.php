<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login de úsuario</title>
	<meta charset="UTF-8">
	<meta name="author" content="MBSoftware">
	<meta name="reply-to" content="michaelbatistasousa@gmail.com">

	<link rel="icon" href="../lib/img/logo.png" type="image/x-icon" />
	<link rel="stylesheet" href="../lib/css/assets/bootstrap.min.css">
	<link rel="stylesheet" href="../lib/css/assets/home.css">

	<script src="../lib/src/jquery.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<form action="../control/signin_controller.php" class="form-signin" method="post">
			<figure><img src="../lib/img/logo2.png"  alt="logo" class="img-responsive logo"></figure>
			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-user"></i>
					</span>
				<input type="text" class="form-control" name="user" required autofocus placeholder="Digite úsuario :" />
			</div>

			<div class="input-group">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-lock"></i>
				</span>
				<input type="password" class="form-control" name="password" placeholder="Digite senha:" />
			</div>

			<button class="btn btn-info btn-block">Entrar</button>
			<br>
			<?php include_once '../control/erro_controller.php'; ?>
		</form>
	</div>
	<?php include '../includes/footer.html'; ?>
	<script src="../lib/src/bootstrap.min.js"></script>
</body>
</html>