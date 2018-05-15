<?php


class IndexController{

	public function indexAction($params){
		
		$name = "skrzypczyk";

		$v = new View("default", "front");
		$v->assign("name", $name);
		

	}

}