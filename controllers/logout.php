<?php

class logout extends Controller{
    function __construct(){
        parent::__construct();
        echo "no mames";
        $_SESSION = array();
        // Destroy the session.
        session_destroy();
        header("location: index.php");
   
    }    
}

?>