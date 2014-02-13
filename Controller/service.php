<?php


/**
* 
*/
class Service extends Controller
{
	
	function __construct(){
		parent::__construct();
		$this->view->secondary_menu = $this->createMenu();
	}


	public function index(){
		$this->constructions();
	}

	public function constructions(){
		$this->view->render('service','constructions');
	}


	public function createMenu(){

		return array(
			'0'=>array(
				'text' => 'CONSTRUC&#538II',
				'controller' => 'service',
				'action' => 'constructions',
				'class' => 'secondary_menu_item',
				),
			'1'=>array(
				'text' => 'RENT A CAR',
				'controller' => 'service',
				'action' => 'rentCar',
				'class' => 'secondary_menu_item',
				),
			'2'=>array(
				'text' => 'PARC AUTO',
				'controller' => 'service',
				'action' => 'parcAuto',
				'class' => 'secondary_menu_item',
				),
			'3'=>array(
				'text' => 'APARTHOTEL',
				'controller' => 'service',
				'action' => 'apartHotel',
				'class' => 'secondary_menu_item',
				),
			'4'=>array(
				'text' => 'IMOBILIARE',
				'controller' => 'service',
				'action' => 'imobiliare',
				'class' => 'secondary_menu_item',
				),
			'5'=>array(
				'text' => 'PLAY & WIN',
				'controller' => 'service',
				'action' => 'playAndWin',
				'class' => 'secondary_menu_item',
				),
			'6'=>array(
				'text' => 'CONSULTAN&#538&#x102',
				'controller' => 'service',
				'action' => 'consultanta',
				'class' => 'secondary_menu_item',
				)
			);

}

public function rentCar(){
	$this->view->render('service','rentCar');
}

public function parcAuto(){
	$this->view->render('service','parcAuto');
}


public function apartHotel(){
	$this->view->render('service','apartHotel');



}
public function imobiliare(){
	$this->view->render('service','imobiliare');
}


public function playAndWin(){
	$this->view->render('service','playAndWin');
}


public function consultanta(){
	$this->view->render('service','consultanta');
}

}

?>