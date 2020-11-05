<?php

class Crud extends controller{
    public function index(){
        if (!isset($_SESSION['login'])){
            
            header('Location:'.BASEURL.'Home/index');
        }else{
            $data = $this->model('tambah_model')->view();
            $this->view('templates/header');
            $this->view('Crud/index',$data);
            $this->view('templates/footer');
        }
    }

    public function detail($id){
        $data = $this->model('tambah_model')->getData($id);
        $this->view('templates/header');
        $this->view('Crud/detail',$data);
        $this->view('templates/footer');
    }
    public function tambah(){
       $data = [
            'nama' => $_POST['nama'],
            'kelas' => $_POST['kelas'],
            'absen' => $_POST['absen']
       ];
        if (isset($_POST['tambah'])){
            if ($this->model('tambah_model')->tambah($data)>0){
                header('Location:'.BASEURL.'Crud/index');
                Flasher::setFlash('berhasil ditambah','data','success');
            }
        }
    }
    public function delete($id){
        if ($this->model('tambah_model')->delete($id)>0){
            header('Location:'.BASEURL.'Crud/index');
            Flasher::setFlash('berhasil dihapus','data','success');
        }
    }
    public function update(){
        $data = $_POST;
        if(isset($_POST['update'])){
            if ($this->model('tambah_model')->update($data)>0){
                header('Location:'.BASEURL.'Crud/index');
                Flasher::setFlash('berhasil diupdate','data','success');
            }
        }
    }
    public function getUpdate(){
        echo json_encode($this->model('tambah_model')->getData($_POST['id']));
    }
}