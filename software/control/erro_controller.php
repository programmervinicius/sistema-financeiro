<?php 

	//variaveis
	@$message = $_GET['message'];
	$alert="";

	//mensagem de erro
	$error['login']="<p class='alert alert-danger'>
			<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>erro ao logar</p>".$alert;

	$error['invasao']="<p class='alert alert-danger'>
			<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>você tem que logar</p>".$alert;

	$error['dont found']="<p class='alert alert-danger'>
			<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>seu úsuario não existe</p>".$alert;


	if ($message) {
		
			if ($message=="mbcmkahdad675162436187123##$@@#$@!jgsAUIAUshghjfdhjwfdh") {

					echo  $error['login'];
			}
			else if($message=="hgscjkassxklashdkasetyr56i3127836gejwhqg"){

					echo $error['invasao'];

			}else{

				echo  $error['dont found'];
			}
	}


 ?>