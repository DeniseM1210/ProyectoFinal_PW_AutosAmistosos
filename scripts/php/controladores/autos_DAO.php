<?php
include('../conexion_BD/conexion_BD_AA.php');

class AutoDAO{
    private $conexion;


    public function __construct(){
        $this->conexion =  new Conexion();
    }

    //METODOS DE ABCC

    //ALTAS
    public function agregar($id,$precio,$modelo,$año,$fabricacion,$cilindros,$puertas,$peso,$capacidad,$color){
        $sql = "INSERT INTO autos VALUES('$id','$precio','$modelo','$año','$fabricacion','$cilindros,'$puertas','$peso','$capacidad','$color');";
        $res = mysqli_query($this->conexion->getConexion(),$sql);
        return $res;
    }

    //MOSTRAR
    public function mostrar(){
        $sql = "SELECT * FROM autos;";
        $res = mysqli_query($this->conexion->get_conexion(),$sql);
        return $res;
    }

    public function eliminar($id){
        $sql = "DELETE FROM autos WHERE id='$id';";
        $res = mysqli_query($this->conexion->get_conexion(),$sql);
        return $res;
    }

    public function mostrar_id($id){
        $sql = "SELECT * FROM autos WHERE id LIKE '$id%';";
        $res = mysqli_query($this->conexion->get_conexion(),$sql);
        return $res;
    }

    public function modificar($id,$precio,$modelo,$año,$fabricacion,$cilindros,$puertas,$peso,$capacidad,$color){
        $sql = "UPDATE autos SET precio='$precio', modelo='$modelo', año='$año', fabricacion='$fabricacion', cilindros='$cilindros', puertas='$puertas', peso='$peso', capacidad='$capacidad', color='$color' WHERE id='$id';";
        $res = mysqli_query($this->conexion->get_conexion(),$sql);
        return $res;
    }



}

?>
