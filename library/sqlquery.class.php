<?php

class SQLQuery {
    /** Connects to database **/
     function connect($address, $account, $pwd, $name) {
         try {
            $this->db = new PDO("mysql:host=" . $address . ";dbname=" . $name, $account, $pwd);
        } catch(PDOException $e) {
            die($e);
        }
    }

    public function getColumn($tableName, $unknownColumnName, $columnOneName, $columnOneValue, $columnTwoName = "1", $columnTwoValue = "1") {
        $stmt = $this->db->query("SELECT $tableName FROM $unknownColumnName WHERE $columnOneName='$columnOneValue' AND $columnTwoName='$columnTwoValue'");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results[0][$unknownColumnName];
    }

    public function query($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
	{
		$sth = $this->db->prepare($sql);
		foreach ($array as $key => $value) {
			$sth->bindValue("$key", $value);
		}
		
		$sth->execute();
		return $sth->fetchAll($fetchMode);
	}

     private function comfirm_query($results){
         if(!$results){
             $output     =   "Querry Failed " .mysql_error()."<br />";
             $output    .=    "Last Query: " .  $this->last_query;
             die($output);
         }
     }
}