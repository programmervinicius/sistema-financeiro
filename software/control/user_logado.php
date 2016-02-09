<?php 
			session_start();

			$soft_name="";

			if(!isset($_SESSION['user']) && !isset($_SESSION['password'])):
				 header("location:login.php?message=hgscjkassxklashdkasetyr56i3127836gejwhqg" , sleep(1));
			else:
				 $soft_name = $_SESSION['user'];
			endif;
	 ?>