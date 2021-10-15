<?php

    include_once("models/alumno.php");
    include_once("conexion.php");
    BD::crearInstancia();

    class ControladorAlumnos{
        
        public function inicio(){
            $alumnos = Alumno::consultar();
            include_once("views/alumnos/inicio.php");
        }

        //Metodo crear Alumno
        public function crear(){
            if($_POST){
                print_r($_POST); 
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                Alumno::crear($nombre, $correo);
            }

            include_once("views/alumnos/crear.php");
        }
        
        //Metodo editar Alumno
        public function editar(){
            if($_POST){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $correo=$_POST['correo'];
                
                Alumno::editar($id,$nombre,$correo);
                header("Location: ./?controlador=alumnos&accion=inicio");
                
            }
            
            $id=$_GET['id'];
            $alumno = Alumno::buscar($id);
            include_once("views/alumnos/editar.php");
        }

        //Metodo para Borrar Alumno
        public function borrar(){
            print_r($_GET);

            $id=$_GET['id'];

            Alumno::borrar($id);
            header("Location: ./?controlador=alumnos&accion=inicio");
        }

        
    }
?>