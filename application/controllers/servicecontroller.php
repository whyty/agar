<?php

class ServiceController extends Controller {

        
	function index(){
           $this->set('title','Agar - Servicii &raquo; Constructii');
	}

	function constructions(){
             $this->set('title','Agar - Servicii &raquo; Constructii');
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
