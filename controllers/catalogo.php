<?php
class Catalogo extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('catalogo/index');
        //echo "<p>Nuevo controlador Main</p>";
    }
    
}
?>