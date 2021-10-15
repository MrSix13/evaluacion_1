<?php

//Clase para conectarse a la base de datos
 class BD{
    //Instancia nulla por defecto
    private static $instancia  = NULL;

    //Metodo crear instancia, si no existe la crea y la devuelve
    public static function crearInstancia(){
        if(!isset(self::$instancia)){
            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            self::$instancia = new PDO('mysql:host=localhost;dbname=alumnos','root','', $opcionesPDO);      

        }
        return self::$instancia;
    }

 }



?>