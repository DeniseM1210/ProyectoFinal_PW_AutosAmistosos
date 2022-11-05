<?php
    class Conexion{
        
        private $conexion;
        private $host="localhost";
        private $usuario = "id19815890_administrador";
        private $contraseña = "a!gPW}%610C0%LsI";
        private $db = "id19815890_autosamistosos"; 

        public function __construct(){
            $this->conexion = mysqli_connect($this->host,$this->usuario,$this->contraseña,$this->db);
            if(!$this->conexion){
                die("Error en conexion a BD" . mysqli_connection_error() . mysqli_connect_errno());
            }else{
                echo "Conexion exitosa"; //Borar esto
            }
        }
        
        public function getConexion(){
            return $this->conexion;
        }      
    
        }

       
       





    

?>