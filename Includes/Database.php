<?php 


class Database extends PDO
{
	
	public function __construct()
	{
		parent::__construct('mysql:host=localhost;dbname=agar_db','root','1');
	}
}



?>