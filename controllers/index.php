<?php

class Main extends Controller{
    function __construct(){
        parent::__construct();
         require_once dirname(__DIR__)."/models/main.php";
         $model = new IndexModel();
        $cata = $model->catalogo();
        #print_r ($cata);
        $this->view->catalogo = $cata;
        $this->view->render('main/index');
        //echo "<p>Nuevo controlador Main</p>";
    }
    
}

?>