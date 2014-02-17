<?php

class HomeController extends Controller {

	function index() {
		$this->set('title', 'Agar - Home');
 		$data =  $this->Home->query("SELECT * FROM `page` WHERE `type`='1'");
                $this->set('home_articles',$data[0]);
	}
 
}
