<?php 
	
	class Logout {

		function __destruct(){
			session_start();
			unset($_SESSION['user']);
			unset($_SESSION['password']);
			session_destroy();
			header("location:../view/login.php" , sleep(1));
		}
	}


 ?>