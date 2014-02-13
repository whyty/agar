<?php


/**
* 
*/
class Error extends Controller
{
	
	function __construct(){
		parent::__construct();
		$this->view->message = 'this page does not exist (error page)';

	}

	public function index(){
		$this->view->render('error','index');
	}


}

?>