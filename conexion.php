<?php 

    class conexion{
        private $servidor ="blz1xdx6iglpd8pvak3l-mysql.services.clever-cloud.com";
        private  $usuario = "uqdcts5a37wtoi5u";
        private $contrasenia ="htmOI1ZtcNUc0hXcV3x7";
        private $conexion;

        public function __construct(){

            try {
                $this->conexion = new PDO("mysql:host=$this->servidor;dbname=blz1xdx6iglpd8pvak3l",$this->usuario,$this->contrasenia);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Falla de conexion".$e;
            }


        }

        public function ejecutar($sql){ //Insertar, update, delete

            $this->conexion->exec($sql);
            return $this->conexion->lastInsertId();

        }
        
        public function consultar($sql){

            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            return $sentencia->fetchAll();

        }


    }

?>