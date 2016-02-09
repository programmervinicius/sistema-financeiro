<?php 
	
		function __autoload($class_name){
			include_once "../model/".$class_name.".class.php";
		}

		$soft_logout = new Logout;

		if($soft_logout->__destruct()):

		endif;

 ?>