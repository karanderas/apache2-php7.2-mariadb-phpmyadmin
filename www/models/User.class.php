<?php
class User extends BaseSQL{

	private $id = null;
	private $firstname;
	private $lastname;
	private $email;
	private $pwd;

	private $token;

	private $status=0;

	public function __construct(){
		parent::__construct();
	}

	public function setId($id){
		$this->id = $id;
	}
	public function setFirstname($firstname){
		$this->firstname = ucfirst(strtolower(trim($firstname)));	
	}
	public function setLastname($lastname){
		$this->lastname = strtoupper(trim($lastname));
	}
	public function setEmail($email){
		$this->email = strtolower(trim($email));
	}
	public function setPwd($pwd){
		$this->pwd = password_hash($pwd, PASSWORD_DEFAULT);
	}
	public function setToken($token = null){
		if( $token ){
			$this->token = $token;
		}else if(!empty($this->email)){
			$this->token = substr(sha1("GDQgfds4354".$this->email.substr(time(), 5).uniqid()."gdsfd"), 2, 10);
		}else{
			die("Veuillez préciser un email");
		}
	}
	public function setStatus($status){
		$this->status = $status;
	}
}






