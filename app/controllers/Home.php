<?php

class Home extends controller{
    public function index(){
        
        $this->view('templates/header');
        $this->view('Home/index');
        $this->view('templates/footer');
        unset($_SESSION['login']);
    }
}