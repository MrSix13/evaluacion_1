<?php

include_once("controllers/controller_".$controlador.".php");
$objControlador = "Controlador".ucfirst($controlador);
$controlador = new $objControlador();
$controlador->$accion();

?>