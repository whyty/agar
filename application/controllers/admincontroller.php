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
                $this->auth->check();
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
                $this->auth->check();
		$this->set('title','Admin Agar');
                $data = $this->Admin->query("SELECT * FROM `page` where `type`='".$type."' ORDER BY title ASC");
		return $data;
	}
	
	function add() {
            $this->auth->check();
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
            $this->auth->check();
            $home_data = $this->viewall(1);
            $this->set("home_data",$home_data);
        }
        
        function constructions(){
            $this->auth->check();
            $constructions_data = $this->viewall(2);
            $this->set("constructions_data",$constructions_data);
        }
        
        function rentacar(){
            $this->auth->check();
            $rentacar_data = $this->viewall(3);
            $this->set("rentacar_data",$rentacar_data);
        }
        
        function parcauto(){
            $this->auth->check();
            $parcauto_data = $this->viewall(4);
            $this->set("parcauto_data",$parcauto_data);
        }
        
        function aparthotel(){
            $this->auth->check();
            $aparthotel_data = $this->viewall(5);
            $this->set("aparthotel_data",$aparthotel_data);
        }
        
        function imobiliare(){
            $this->auth->check();
            $imobiliare_data = $this->viewall(6);
            $this->set("imobiliare_data",$imobiliare_data);
        }
        
        function playandwin(){
            $this->auth->check();
            $playandwin_data = $this->viewall(7);
            $this->set("playandwin_data",$playandwin_data);
        }
        
        function consultanta(){
            $this->auth->check();
            $consultanta_data = $this->viewall(8);
            $this->set("consultanta_data",$consultanta_data);
        }
        
        function contact(){
            $this->auth->check();
            $contact_data = $this->viewall(9);
            $this->set("contact_data",$contact_data);
        }
        
         function addProject(){
             $this->auth->check();
         }
        
        function addP(){
            $this->auth->check();
            $file = $_FILES;
            $data = $_POST;
            $rn = rand(1,139023);
            ($file['file']['name']!='') ? $filename = $rn."-".$file['file']['name'] : $filename = '';

            $img = new Img();
            $img->add($file,"projects",$rn);
            $this->Admin->query("INSERT INTO  `projects` (title,text,image) VALUES ('" . $data['title'] . "', '" . $data['text2'] . "', '". $filename . "')");
            $this->redirect("/admin/projects");

        }
        
        function editProject($id){
            $this->auth->check();
            $data = $this->Admin->query("SELECT * FROM `projects` WHERE id='$id'");
            $this->set('data', $data[0]);
        }
        
        function editP($id){
            $this->auth->check();
            $file = $_FILES;
            $pr = $_POST;
            $Im = new Img();
           
            $image = $this->Admin->query("SELECT image FROM `projects` WHERE id='$id'");
            
            $rand = rand(1,139023);
            if($file['file']['name']!=''){
                if($image[0]['image']!='')
                    $Im->remove($file['file']['name'], "/projects");
                $Im->add($file, "projects",$rand);
                
            }
            ($file['file']['name']!='') ? $filename = $rand."-".$file['file']['name'] : $filename = $image[0]['image'];

            $this->Admin->query("UPDATE `projects` SET title='".$pr['title']."',text='".$pr['text2']."',image='".$filename."' WHERE id='$id'");
            $this->redirect("/admin/editProject/".$id);
        }
        
        function deleteImg($id){
            $this->auth->check();
            $I = new Img();
            $image = $this->Admin->query("SELECT image FROM `projects` WHERE id='$id'");
            $I->remove($image[0]['image'],'projects');
            $this->Admin->query("UPDATE `projects` SET image='' WHERE id='$id'");
            $this->redirect("/admin/editProject/".$id);
        }
        
        function projects(){
            $this->auth->check();
            $projects = $this->Admin->query("SELECT * FROM `projects` order by title ASC");
            $this->set('projects',$projects);
        }
        
        function deleteProject($id){
            $this->auth->check();
            $Is = new Img();
            $im = $this->Admin->query("SELECT image FROM `projects` WHERE id='$id'");
            $Is->remove($im[0]['image'],'projects');
            $pictures = $this->Admin->query("SELECT * FROM `gallery` where project_id='$id'");
            if(count($pictures > 0)){
                foreach($pictures as $picture){
                    $Is->remove($picture['image'],'gallery');
                    $this->Admin->query("DELETE FROM `gallery` WHERE id='".$picture['id']."'");
                }
            }
            $this->Admin->query("DELETE FROM `projects` WHERE id='$id'");
            $this->redirect("/admin/projects/");
        }
        
        function gallery($id){
            $this->auth->check();
            $pictures= $this->Admin->query("SELECT * FROM `gallery` WHERE project_id='$id'");
            $this->set("pictures",$pictures);
            $this->set("id",$id);
        }
        
        function addImg($id){
            $file = $_FILES;
            $gal = new Img();
            if($file['file']['name']!=''){
                $r = rand(1,139023);
                $gal->add($file,"gallery",$r);
                $this->Admin->query("INSERT INTO  `gallery` (image,project_id) VALUES ('" . $r . "-" . $file["file"]['name'] . "', '" . $id . "')");
                $this->redirect("/admin/gallery/".$id);
            }
        }
        
        function delImg($id){
            $this->auth->check();
            $pic = new Img();
            $picture = $this->Admin->query("SELECT * FROM `gallery` WHERE id='$id'");
            $pic->remove($picture[0]['image'],'gallery');
            $this->Admin->query("DELETE FROM `gallery` WHERE id='$id'");
            $this->redirect("/admin/gallery/".$picture[0]['project_id']);
        }
}
