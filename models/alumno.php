<?php
    class Alumno{
        public $id;
        public $nombre;
        public $correo;

        public function __construct($id,$nombre,$correo){
            $this->id     = $id;
            $this->nombre = $nombre;
            $this->correo = $correo;
        }

        public static function consultar(){
            $listaAlumnos = [];
            $conexionDB   = BD::crearInstancia();
            $sql          = $conexionDB->query("SELECT * FROM alumno");

            foreach($sql->fetchAll() as $alumno){
                $listaAlumnos[] = new Alumno($alumno['id'],$alumno['Nombre'], $alumno['Correo']);
            }
            return $listaAlumnos;
        }

         //Metodo para Crear Alumno
        public static function crear($nombre,$correo){
            $conexionDB = BD::crearInstancia();

            $sql = $conexionDB->prepare("INSERT INTO alumno(nombre,correo) VALUES(?,?)");

            $sql->execute(array($nombre,$correo));
        }
        
        //Metodo para borrar Alumno
        public static function borrar($id){
            $conexionDB   = BD::crearInstancia();
            $sql = $conexionDB->prepare("DELETE FROM alumno WHERE id=?");

            $sql->execute(array($id));

        }
        //Metodo para buscar Alumno 
        public static function buscar($id){
            $conexionDB   = BD::crearInstancia();
            $sql = $conexionDB->prepare("SELECT * FROM alumno WHERE id=?");

            $sql->execute(array($id));
            $alumno = $sql->fetch();
            return new Alumno($alumno['id'],$alumno['Nombre'], $alumno['Correo']);

        }

        //Metodo para editar alumno
        public static function editar($id, $nombre, $correo){
            $conexionDB   = BD::crearInstancia();
            $sql = $conexionDB->prepare("UPDATE alumno SET nombre=?, correo=? WHERE id=?");
            $sql->execute(array($nombre,$correo,$id));
        }


    }


?>