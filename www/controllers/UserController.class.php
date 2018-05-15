<?php
class UserController{

	public function indexAction($params){
		echo "Action par defaut de user";
	}


	public function addAction($params){
		echo "Ajout d'un utilisateur";

		$user = new User();
		
		$user->setFirstname("Yves");
		$user->setEmail("y.skrzypczyk@gmail.com");
		$user->setPwd("Test1234");
		$user->save();
		


	}

	public function removeAction($params){
		echo "Action de suppression d'un user";
		echo "<pre>";
		print_r($params);
	}
	
}