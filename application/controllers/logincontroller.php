<?php
class LoginController extends Controller {
        
        function index(){
            
        }
        
        function logged(){
 		$username = $_POST['user'];
		$password = md5($_POST['password']);
		$userdata = $this->Login->query("SELECT * FROM `users` WHERE `user`='$username' AND `password`='$password'");
                if($userdata[0]){
 			$this->auth->login($userdata[0]['user']); 
			$this->redirect("/admin/dashboard");
		}else{
			$this->redirect("/login");
		}
	}
}
