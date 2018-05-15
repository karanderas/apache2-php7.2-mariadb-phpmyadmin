<?php


class mother{

	public function getValueMother(){
		//echo $this->prive;
		//echo $this->pro;
	}
}

class center extends mother{

	private $prive = 2;
	protected $pro = 3;

}


class child extends center{

	public function getValueCenter(){
		echo $this->prive;
		echo $this->pro;
	}
}


//$centre = new center();
//$centre->getValueMother();

$child = new child();
$child->getValueCenter();



