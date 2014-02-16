<?php

class ServiceController extends Controller {

        
	function index(){
           $this->set('title','Agar - Servicii &raquo; Constructii');
           $content_i = $this->Service->query("SELECT * FROM `page` WHERE `type`='2'"); 
             $this->set("articles_ci", $content_i);
	}

	function constructions(){
             $this->set('title','Agar - Servicii &raquo; Constructii');
             $content_c = $this->Service->query("SELECT * FROM `page` WHERE `type`='2'"); 
             $this->set("articles_c", $content_c);
	}


        function rentacar(){
           $this->set('title','Agar - Servicii &raquo; Rent a Car');
        }

        function parcauto(){
            $this->set('title','Agar - Servicii &raquo; Parc Auto');
        }


        function aparthotel(){
           $this->set('title','Agar - Servicii &raquo; ApartHotel');
        }
        
        function imobiliare(){
            $this->set('title','Agar - Servicii &raquo; Imobiliare');
        }


        function playandwin(){ 
            $this->set('title','Agar - Servicii &raquo; PlayAndWin');
        }


        function consultanta(){
           $this->set('title','Agar - Servicii &raquo; Consultanta');
        }
 
}
