<?php

class agregar extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('agregar/index');
    }

    function add(){
        $linea = $_POST['linea'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $costo = $_POST['precio'];
        $descrip = $_POST['descrip'];
        $target_dir = dirname(__DIR__)."/public/img/motos/";
        require_once dirname(__DIR__)."/models/main.php";
        $model = new IndexModel();
        $identy = $model->last();
        $target_file = $target_dir .($identy+1).".jpg";
        move_uploaded_file($_FILES["imag"]["tmp_name"], $target_file);
            $item = $model->add_item($linea,$marca,$modelo,$costo,$descrip);
            header('location: '.constant('URL'));

    }
}

?>