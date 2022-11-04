<?php
    class Conexion{
        private $conexion;
        private $host="localhost";
        private $usuario = "aa";
        private $contraseña = "1234";
        private $db = "autos_amistosos"; 

        public function __construct(){
                try{
                    $this->conexion = new PDO("pgsql:host=$this->host; dbname=$this->db", $this->usuario,$this->contraseña );
                    echo "Conexion con exito";
                }catch(PDOException $exp){
                    echo "conexion erronea";
                }
                
                

                
            
            

                
            
        }

        public function getConn(){
            return $this->conexion;
        }
       





    }

?>