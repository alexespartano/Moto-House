<?php

class Login extends Controller{
    function __construct(){
        parent::__construct();
    }


    function render(){
        $this->view->render('login/index');
    }


    function log(){
        $username = $_POST['username'];
        $password    = $_POST['password'];
        ///select or user password verificacion
        if($this->model->auth($username,$password)){
            #$this->view->render('/index');
            $_SESSION['username'] = $username;
            header('location: '.constant('URL'));
        }else{
            require_once 'controllers/errores.php';
            $controller = new Errores();
            #$this->view->mensaje = "este usuario ya está registrado";
            #$this->view->render('/index');
        }

/* 
        if($this->model->insert(['username' => $username, 'password' => $password])){
            //header('location: '.constant('URL').'nuevo/nuevouser');
            $this->view->render('/index');
        }else{
            $this->view->mensaje = "este usuario ya está registrado";
            $this->view->render('/index');
        } */
    }
    
}

?>