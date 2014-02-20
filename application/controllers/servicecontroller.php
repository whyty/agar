<?php

class ServiceController extends Controller {

        
	function index(){
           $this->set('title','Agar - Servicii &raquo; Constructii');
           $content_i = $this->getData("page",2);
           $projects_i = $this->Service->query("SELECT * FROM `projects` ORDER BY id DESC LIMIT 2");
           $this->set("projects_i",$projects_i);
           $this->set("articles_i", $content_i);
	}

	function constructions(){
             $this->set('title','Agar - Servicii &raquo; Constructii');
             $content_c =  $this->getData("page",2); 
             $projects = $this->Service->query("SELECT * FROM `projects` ORDER BY id DESC LIMIT 2");
             $this->set("projects",$projects);
             $this->set("articles_c", $content_c);
	}


        function rentacar(){
           $this->set('title','Agar - Servicii &raquo; Rent a Car');
           $content_r =  $this->getData("page",3); 
           $this->set("articles_r", $content_r);
        }

        function parcauto(){
            $this->set('title','Agar - Servicii &raquo; Parc Auto');
            $content_p =  $this->getData("page",4); 
            $this->set("articles_p", $content_p);
        }


        function aparthotel(){
           $this->set('title','Agar - Servicii &raquo; ApartHotel');
           $content_a =  $this->getData("page",5); 
           $this->set("articles_a", $content_a);
        }
        
        function imobiliare(){
            $this->set('title','Agar - Servicii &raquo; Imobiliare');
            $content_im =  $this->getData("page",6); 
           $this->set("articles_im", $content_im);
        }


        function playandwin(){ 
            $this->set('title','Agar - Servicii &raquo; PlayAndWin');
            $content_w =  $this->getData("page",7); 
            $this->set("articles_w", $content_w);
        }


        function consultanta(){
           $this->set('title','Agar - Servicii &raquo; Consultanta');
           $content_cs =  $this->getData("page",8); 
           $this->set("articles_cs", $content_cs);
        }
        
        function getData($table,$type){
            $data =  $this->Service->query("SELECT * FROM $table WHERE `type`='".$type."'");
            return $data;
        }
        
        function projects(){
            $this->set('title','Agar - Servicii &raquo; Proiecte');
            $proiecte = $this->Service->query("SELECT * FROM `projects`");
            $this->set("proiecte",$proiecte);;
        }
 
}
