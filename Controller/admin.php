<?php


/**
* 
*/
class Admin extends Controller
{
	
	function __construct(){
		parent::__construct();

	}


	public function index(){
            $this->view->render('admin','index', 'backend');
	}
        public function login(){
            $this->view->render('admin','login', 'backend');
	}
        public function signin(){
            $this->model->signin();
        }
        public function dashboard(){
            $this->view->render('admin','dashboard', 'backend');
	}
        
        public function logout(){
            $this->model->logout();
        }
}

?>