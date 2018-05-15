<?php 
class User extends BaseSql{

	protected $id = null;
	protected $firstname;
	protected $lastname;
	protected $email;
	protected $pwd;
	protected $token="12345678901234567890123456789012";
	protected $age = 0;
	protected $status = 0;


	public function __construct(){
		parent::__construct();
	}

	public function setId($id){
		$this->id=$id;
	}
	public function setFirstname($firstname){
		$this->firstname=ucfirst(strtolower(trim($firstname)));
	}
	public function setLastname($lastname){
		$this->lastname=strtoupper(trim($lastname));
	}
	public function setEmail($email){
		$this->email=strtolower(trim($email));
	}
	public function setPwd($pwd){
		$this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
	}
	public function setToken($token){
		$this->token=$token;
	}
	public function setAge($age){
		$this->age=$age;
	}
	public function setStatus($status){
		$this->status=$status;
	}

}