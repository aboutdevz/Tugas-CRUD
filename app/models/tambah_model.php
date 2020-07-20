<?php

class tambah_model{
    private $table = "siswa";
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambah($data){
        $sql = "INSERT INTO $this->table (id,nama,kelas,absen) VALUES ('',:nama,:kelas,:absen)";
        $this->db->query($sql);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('kelas',$data['kelas']);
        $this->db->bind('absen',$data['absen']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function view(){
        $sql="SELECT * FROM $this->table";
        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function delete($id){
        $query = "DELETE FROM $this->table WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function update($data){
        $query = " UPDATE $this->table SET
            nama = :nama,
            kelas = :kelas,
            absen = :absen
            WHERE id = :id
        ";
        $this->db->query($query);
        $this->db->bind('nama',$data['namaUpdate']);
        $this->db->bind('kelas',$data['kelasUpdate']);
        $this->db->bind('absen',$data['absenUpdate']);
        $this->db->bind('id',$data['idUpdate']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getData($id){
        $query = "SELECT * FROM $this->table WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        return $this->db->single();
    }
    
}