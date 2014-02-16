<?php
class Controller {

		
	protected $_controller;
	protected $_action;
	protected $_template;
	protected $auth;
	public $doNotRenderHeader;
	public $render;

	function __construct($controller, $action) {
		$this->auth = new Auth();
 
		$this->_controller = ucfirst($controller);
		$this->_action = $action;
		
		$model = ucfirst($controller);
		$this->doNotRenderHeader = 0;
		$this->render = 1;
 		$this->$model = new $model;
		$this->_template = new Template($controller,$action);

	}

	function set($name,$value) {
		$this->_template->set($name,$value);
	}

	function redirect($where){
		header("Location: ".$where);
	}

	function __destruct() {
		if ($this->render) {
			$this->_template->render($this->doNotRenderHeader);
		}
	}

}
