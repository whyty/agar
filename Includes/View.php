<?php


/**
* 
*/
class View
{
	
	function __construct(){
		$this->html = new Helper();
	}

	public function render($controller,$method,$layout=NULL){
            if($layout != NULL){
                //require 'View/elements/'. $layout .'/header.php'; 
		require "View/". $layout . "/" .strtolower($controller)."/".strtolower($method).".php";
		//require 'View/elements/'. $layout .'/footer.php'; 
            }else{
		require 'View/elements/header.php'; 
		require "View/".strtolower($controller)."/".strtolower($method).".php";
		require 'View/elements/footer.php';
            }
	}

}


?>