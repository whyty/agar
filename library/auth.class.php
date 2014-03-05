<?php
session_start();
class Auth{
	public $username;
	

	function login($app_admin){
		$_SESSION['app_admin'] = $app_admin;
                $_SESSION['timeout'] = time();
 	}

	function check(){
                $inactive = 1800;
 		if(!$_SESSION['app_admin'] || $_SESSION['app_admin'] == ''){
			header("Location: /login");
		}else{
                    $session_life = time() - $_SESSION['timeout'];
                    if($session_life > $inactive){  
                        unset($_SESSION['timeout']);
                        unset($_SESSION['app_admin']);
                        session_destroy(); 
                        header("Location: /login");     
                        
                    }

                }
	}

	function logout(){
 		unset($_SESSION['app_admin']);
		session_destroy();
                header("Location: /login");
	}
}