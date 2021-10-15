<?php

    if(isset($_GET['controlador']) && isset($_GET['accion']) ){
        
        //Validacion//
        $_GET['controlador']!="" ? $controlador = $_GET['controlador'] : $controlador="pages"; 
        $_GET['accion']!="" ? $accion = $_GET['accion'] : $accion="inicio";
        
    }


    require_once("views/template.php");

?>