<?php 
session_start();
class Auth{
	public $username;
	

	function login($app_admin){
		$_SESSION['app_admin'] = $app_admin;
 	}

	function check(){
 		if(!$_SESSION['app_admin'] || $_SESSION['app_admin'] == ''){
			header("Location: /");
		}
	}

	function logout(){
 		unset($_SESSION['app_admin']);
		session_destroy();
	}
}