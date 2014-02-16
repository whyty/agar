<?php

class AdminController extends Controller {
 	public function index(){
            $this->auth->check();
            $this->set('title','Agar - admin');
	}


	function edithome($id = null) {
		$this->auth->check();
  		$data = $this->Admin->query("SELECT * FROM `page` WHERE id='$id'");
 		$x = new Img();
 		$this->set('data', $data);
	}

	function edit($id=null){
		$d = $_POST;
		$this->Admin->query("UPDATE `page` SET `title`='".$d['title']."', `text`='".$d['text2']."'   WHERE id='$id'");
		$this->redirect("/admin/edithome/".$id);
	}

	function addHome(){
		$this->Admin->query('insert into items (item_name) values (\''.mysql_real_escape_string($todo).'\')');
	}
	
	function viewall() {

		$this->set('title','All Items - My Todo List App');
		$this->set('todo',$this->Item->selectAll());
	}
	
	function add() {
		$todo = $_POST['todo'];
		$this->set('title','Success - My Todo List App');
		$this->set('todo',$this->Item->query('insert into items (item_name) values (\''.mysql_real_escape_string($todo).'\')'));	
	}
	
	function delete($id = null) {
		$this->set('title','Success - My Todo List App');
		$this->set('todo',$this->Item->query('delete from items where id = \''.mysql_real_escape_string($id).'\''));	
	}

	function dashboard(){

	}
        
        function logout(){
            $this->auth->logout();
        }

}
