<?php 
	
	include_once '../model/Signin.class.php';

	$soft = new Signin;

	if (isset($_POST)) {
		
			$soft->setUser(htmlspecialchars($_POST['user']));
			$soft->setPassword(htmlspecialchars(md5($_POST['password'])));

			if($soft->findAll()):

			endif;

	}

	
 ?>