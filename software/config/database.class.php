<?php 
	
		define("DB_HOST", 'localhost');
		define("DB_PASS", '');
		define("DB_USER", 'root');
		define("DB_DB", "mbs");

		class DB {

			private  static $db;

			public function __construct(){
				if (!isset(self::$db)) {
						
						try {
							self::$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_DB , DB_USER , DB_PASS);
							self::$db->setAttribute(PDO::ERRMODE_EXCEPTION , PDO::FETCH_OBJ);
						} catch (PDOException $e) {
							echo "erro ao conectar com banco de dados".$e->getMessage();
							trigger_error($e , E_USER_ERROR);
						}
				}
				return self::$db;
			}

		}

 ?>