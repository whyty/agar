<?php

/**
* Contains all things that need initialization 
*/
class Bootstrap
{
	
	function __construct(){

		$url = (isset($_GET['url']) ? $_GET['url'] : null);
		$url = rtrim($url,'/');
		$url = explode('/', $url);

		if(empty($url[0])){
			require 'Controller/home.php'; // the default controller/page
			$controller = new Home();
			$controller->index();
			return false;
		}

		$file = 'Controller/'. $url[0] .'.php';
		if(file_exists($file)){
			require $file;
		}else{
			require 'Controller/error.php';
			$controller = new Error();
			return false;
		}

		$controller = new $url[0];
                $controller->loadModel($url[0]);


		if(isset($url[1])){
			if(isset($url[2])){
				$controller->{$url[1]}($url[2]); 
			}else{
				$controller->{$url[1]}(); 
			}
		}else{
			$controller->index();
		}


	}

}


?>