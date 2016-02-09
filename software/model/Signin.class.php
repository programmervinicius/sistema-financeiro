<?php 

	
		include_once '../config/database.class.php';


		class Signin extends DB {

				private $soft_user;
				private $soft_password;
				protected $soft_table="register";

				public function setUser($soft_user){
					$this->soft_user = $soft_user;
				}

				public function setPassword($soft_password){
					$this->soft_password = $soft_password;
				}

				public function getUser(){
					return $this->soft_user;
				}

				public function getPassword(){
					return $this->soft_password;
				}

				//select the user for signin
				function findAll(){
					session_start();
					$soft_query ="SELECT  * FROM $this->soft_table  WHERE user =:user AND password =:password LIMIT 1";
					$soft_ins = DB::__construct();
					$soft_sql = $soft_ins->prepare($soft_query);
					$soft_sql->bindParam(":user" , $this->soft_user);
					$soft_sql->bindParam(":password" , $this->soft_password);
					$soft_sql->execute();		

					if($soft_sql->rowCount() == 1) :
								$dados=$soft_sql->fetch();
								$_SESSION['user']=$dados['user'];
								$_SESSION['password']=$dados['password'];
								header("location:../view/index.php" , sleep(1));
					else:
						unset($_SESSION['user']);
						unset($_SESSION['password']);
						header("location:../view/login.php?message=mbcmkahdad675162436187123##$@@#$@!jgsAUIAUshghjfdhjwfdh" , sleep(1));
						exit();
					endif;
				}

		}

 ?>