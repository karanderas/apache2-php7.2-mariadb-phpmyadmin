<?php

class BaseSql{

	protected $dbName = "ProjetBd";

	public function __construct(){
		echo "test";
	}

	public function save(){
		echo "insertion en BDD de l'utilisateur ".$this->firstname;
	}
}


class User extends BaseSql{

	protected $firstname;
	protected $lastname;
	protected $email;
	protected $pwd;


	public function __construct($firstname=null, $lastname=null, $email=null, $pwd=null){
		$this->setFirstname($firstname);
		$this->setLastname($lastname);
		$this->setEmail($email);
		$this->setPwd($pwd);

		parent::__construct();
	}

	public function setFirstname($firstname){
		$this->firstname =  ucfirst(strtolower(trim($firstname)));
	}
	public function setLastname($lastname){
		$this->lastname = strtoupper(trim($lastname));
	}
	public function setEmail($email){
		$this->email = strtolower(trim($email));
	}
	public function setPwd($pwd){
		$this->pwd = self::hash($pwd);
	}

	public function getDbName(){
		return $this->dbName;
	}	


	public static function hash($string){
		return password_hash($string, PASSWORD_DEFAULT);
	}
	
}





$user = new User("Yves", 
	"Skrzypczyk", 
	"y.skrzypczyk@gmail.com", 
	"Test1234");

$user->save();



