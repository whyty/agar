<?php

class Home_Model extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function getData(){
        $data =$this->db->select('SELECT * FROM pages WHERE id = :id', 
                array('id' => 1));
        
        return $data;        
    }
}