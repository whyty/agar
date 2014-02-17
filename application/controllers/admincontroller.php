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
        
        function deletepage($id){
            $this->auth->check();
            $type = $this->Admin->query("SELECT type FROM `page` WHERE id='$id'");
            $this->Admin->query("DELETE FROM `page` WHERE id='$id'");
            switch ($type[0]['type']){
                    case "1":
                        $this->redirect("/admin/home");
                        break;
                    case "2":
                        $this->redirect("/admin/constructions");
                        break;
                    case "3":
                        $this->redirect("/admin/rentacar");
                        break;
                    case "4":
                        $this->redirect("/admin/parcauto");
                        break;
                    case "5":
                        $this->redirect("/admin/aparthotel");
                        break;
                    case "6":
                        $this->redirect("/admin/imobiliare");
                        break;
                    case "7":
                        $this->redirect("/admin/playandwin");
                        break;
                    case "8":
                        $this->redirect("/admin/consultanta");
                        break;
                    case "9":
                        $this->redirect("/admin/contact");
                        break;
                }
        }
	
	function viewall($type) {

		$this->set('title','Admin Agar');
                $data = $this->Admin->query("SELECT * FROM `page` where `type`='".$type."' ORDER BY title ASC");
		return $data;
	}
	
	function add() {
		$data = $_POST;
                 if(!isset($data['cols']))
                    $data['cols'] = 'no';
		$this->Admin->query("INSERT INTO  `page` (title,text,type,cols) VALUES ('" . $data['title'] . "', '" . $data['text2'] . "', '" . $data['types'] . "', '" . $data['cols'] . "')");
		switch ($data['types']){
                    case "1":
                        $this->redirect("/admin/home");
                        break;
                    case "2":
                        $this->redirect("/admin/constructions");
                        break;
                    case "3":
                        $this->redirect("/admin/rentacar");
                        break;
                    case "4":
                        $this->redirect("/admin/parcauto");
                        break;
                    case "5":
                        $this->redirect("/admin/aparthotel");
                        break;
                    case "6":
                        $this->redirect("/admin/imobiliare");
                        break;
                    case "7":
                        $this->redirect("/admin/playandwin");
                        break;
                    case "8":
                        $this->redirect("/admin/consultanta");
                        break;
                    case "9":
                        $this->redirect("/admin/contact");
                        break;
                }
                	
	}

	function dashboard(){

	}
        
        function logout(){
            $this->auth->logout();
        }
        
        function home(){
            $home_data = $this->viewall(1);
            $this->set("home_data",$home_data);
        }
        
        function constructions(){
            $constructions_data = $this->viewall(2);
            $this->set("constructions_data",$constructions_data);
        }
        
        function rentacar(){
            $rentacar_data = $this->viewall(3);
            $this->set("rentacar_data",$rentacar_data);
        }
        
        function parcauto(){
            $parcauto_data = $this->viewall(4);
            $this->set("parcauto_data",$parcauto_data);
        }
        
        function aparthotel(){
            $aparthotel_data = $this->viewall(5);
            $this->set("aparthotel_data",$aparthotel_data);
        }
        
        function imobiliare(){
            $imobiliare_data = $this->viewall(6);
            $this->set("imobiliare_data",$imobiliare_data);
        }
        
        function playandwin(){
            $playandwin_data = $this->viewall(7);
            $this->set("playandwin_data",$playandwin_data);
        }
        
        function consultanta(){
            $consultanta_data = $this->viewall(8);
            $this->set("consultanta_data",$consultanta_data);
        }
        
        function contact(){
            $contact_data = $this->viewall(9);
            $this->set("contact_data",$contact_data);
        }
}
