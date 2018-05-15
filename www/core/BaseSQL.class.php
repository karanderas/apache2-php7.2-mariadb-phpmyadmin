<?php
class BaseSQL{

	private $pdo;

	public function __construct(){
		try{
			$this->pdo = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME , DBUSER, DBPWD);
		}catch(Exception $e){
			die("Erreur SQL :".$e->getMessage());
		}
	}


	public function save(){

		echo "enregistrement";

	}
}