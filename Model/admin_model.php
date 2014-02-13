<?php 

/**
* 
*/
class Admin_Model extends Model
{
	
	public function __construct(){
            parent::__construct();
        }
        
        public function login(){
            $sth = $this->db->prepare("SELECT id FROM users WHERE 
				login = :login AND password = MD5(:password)");
            $sth->execute(array(
                    ':login' => $_POST['login'],
                    ':password' => $_POST['password']
            ));

            $count =  $sth->rowCount();
            if ($count > 0) {
                    // login
                    Session::init();
                    Session::set('loggedIn', true);
                    header('location: ../admin/dashboard');
            } else {
                    header('location: ../admin');
            }
        }
}

?>