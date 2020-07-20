<?php

class Admin extends controller{
    public function Login(){
        if (isset($_POST['submit_Lgn'])){
            $data = $_POST;
            $credential = $this->model('user_model')->Login($data);
            $passcheck = password_verify($data['password'],$credential['Upass']);
            if ($data['username'] == $credential['Uname'] && $passcheck == TRUE){
                $_SESSION['login'] = $data['username'];
                header('Location:'.BASEURL.'Crud/index');
            }else{
                Flasher:: setFlash('Login','Gagal','danger');
                header('Location:'.BASEURL.'Home/index');
            }
        }else{
            header('Location:'.BASEURL.'Home/index');
        }
    }
    public function Logout(){
        unset($_SESSION['login']);
        header('Location:'.BASEURL.'Home/index');
    }
}