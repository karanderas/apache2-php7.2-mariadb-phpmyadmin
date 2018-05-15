<?php
class BaseSql{

	private $table;
	private $pdo;
	private $columns;
	
	/*

	define("DBUSER","root");
	define("DBPWD","root");
	define("DBHOST","localhost");
	define("DBNAME","3iwclasse2");
	define("DBPORT","3306");


	*/

	public function __construct(){

		try{
			$this->pdo = new PDO( "mysql:host=".DBHOST.";dbname=".DBNAME , DBUSER , DBPWD); 
		}catch(Exception $e){
			die("Erreur SQL ".$e->getMessage());
		}


		$this->table = strtolower(get_called_class());

		

	}


	public function setColumns(){
		//On récupère les variables de la class BaseSql grace a get_class();
		$columnsExcluded = get_class_vars(get_class());
		//  ["table"=> , "pdo"=> , "columns" =>]
		//On enlève du tableau contenant toutes les variables de l'objet les columns à exclure
		//get_object_vars($this) -> ["id"=>, "firstname"=> , .... ,table"=> , "pdo"=> , "columns" =>]
		$this->columns = array_diff_key(get_object_vars($this)	, $columnsExcluded);
	}


	public function save(){
		echo "Enregristrement";
		$this->setColumns();

		if( $this->id ){
			//Update


		}else{
			//Insert
			unset($this->columns["id"]);
			
			$query = $this->pdo->prepare("INSERT INTO ".$this->table." (".
				implode(',', array_keys($this->columns))
				.") VALUES (:".
				implode(',:', array_keys($this->columns))
				.")");

			$query->execute($this->columns);

		}
		
	}

}









