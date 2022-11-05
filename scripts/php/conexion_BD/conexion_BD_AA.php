<?php
    class Conexion{
        //Modificar Datos para BAse de datos en WEbHOST
        private $conexion;
        private $host="localhost";
        private $usuario = "";
        private $contraseña = "1234";
        private $db = "autos_amistosos"; 

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