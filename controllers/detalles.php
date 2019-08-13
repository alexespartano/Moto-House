<?php

class detalles extends Controller{
    function __construct(){
        parent::__construct();
         #require_once dirname(__DIR__)."/models/main.php";
         #$model = new IndexModel();
        #$cata = $model->catalogo();
        #print_r ($cata);
        #$this->view->catalogo = $cata;
        //echo "<p>Nuevo controlador Main</p>";
    }

    function item($num_item){
         require_once dirname(__DIR__)."/models/main.php";
         $model = new IndexModel();
        $item = $model->get_item($num_item);
        $this->view->values = $item;
        $this->view->render('detalles/index');
    }

    function modificar(){
        $linea = $_POST['linea'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $costo = $_POST['precio'];
        $descrip = $_POST['descrip'];
        $identy = $_POST['identy'];

        require_once dirname(__DIR__)."/models/main.php";
        $model = new IndexModel();
       $item = $model->set_item($linea,$marca,$modelo,$costo,$descrip,$identy);
       header('location: '.constant('URL')."detalles/item/".$identy);
    }
    
    function eliminar($item){
        require_once dirname(__DIR__)."/models/main.php";
        $model = new IndexModel();
       $item = $model->del_item($item);
       header('location: '.constant('URL'));
    }
}

?>