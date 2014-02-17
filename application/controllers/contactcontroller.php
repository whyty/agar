<?php

class ContactController extends Controller {

	function index() {
		$this->set('title', 'Agar - Contact');
 		$data =  $this->Contact->query("SELECT * FROM `page` WHERE `type`='9'");
                $this->set('contact',$data[0]);
	}
 
}