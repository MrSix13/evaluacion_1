<?php

class ControladorPages{
    //Metodo para la pagina de inicio
    public function inicio(){
        include_once("views/pages/inicio.php");
    }

    //Metodo para mostrar pagina de error
    public function error(){
        include_once("views/pages/error.php");
    }
}


?>