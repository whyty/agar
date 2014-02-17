<?php

class AdminController extends Controller {
 	public function index(){
            $this->auth->check();
            $this->set('title','Agar - admin');
	}


	function editpage($id = null) {
		$this->auth->check();
  		$data = $this->Admin->query("SELECT * FROM `page` WHERE id='$id'");
                if($data[0]['cols'] == 'yes'){
                    $checked = 'checked="checked"';
                }else{
                    $checked = '';
                }
 		$this->set('data', $data[0]);
                $this->set('checked', $checked);
	}

	function edit($id=null){
		$d = $_POST;
                if(!isset($d['cols']))
                    $d['cols'] = 'no';
		$this->Admin->query("UPDATE `page` SET `title`='".$d['title']."', `text`='".$d['text2']."', `cols` = '".$d['cols']."'   WHERE id='$id'");
		$this->redirect("/admin/editpage/".$id);
	}

	function addPage(){
                $this->auth->check();
                $this->set('title','Admin - Add page');
                $types = $this->Admin->query("SELECT * FROM `types` ORDER BY name ASC");
		$this->set('types',$types);
	}
	
	function viewall() {

		$this->set('title','All Items - My Todo List App');
		$this->set('todo',$this->Item->selectAll());
	}
	
	function add() {
		$data = $_POST;
                 if(!isset($data['cols']))
                    $data['cols'] = 'no';
		$this->Admin->query("INSERT INTO  `page` (title,text,type,cols) VALUES ('" . $data['title'] . "', '" . $data['text2'] . "', '" . $data['types'] . "', '" . $data['cols'] . "')");
		$this->redirect("/admin/dashboard");	
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
        
        function home(){
            
        }
        
        function service(){
            
        }
        
        
}
