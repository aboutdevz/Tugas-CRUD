<?php
class user_model{
    private $table = 'user';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function Login($data){
        $sql = "SELECT * FROM $this->table WHERE Uname = :Uname";
        $this->db->query($sql);
        $this->db->bind('Uname',$data['username']);
        return $this->db->single();
    }
}