<?php
class View{

	private $v;
	private $t;
	private $data = [];

	public function __construct($v = "default",$t = "front"){
		$this->v = $v.".view.php";
		$this->t = $t.".tpl.php";

		if( !file_exists("views/templates/".$this->t)){
			die("Le template ".$this->t." n'existe pas");
		}
		if( !file_exists("views/".$this->v)){
			die("La vue ".$this->v." n'existe pas");
		}

		
	}

	public function assign( $key , $value){
		$this->data[$key] = $value; 
	}



	public function __destruct(){
		global $a, $c;

		extract($this->data);

		include "views/templates/".$this->t;
	}


}




