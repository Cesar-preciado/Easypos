<?php 

#easy pos aplication tienda online realizada en php

class Camisa{

    private $conexion;

    public function __construct(){

        $this->conexion = DatabaseEasypos::Conexion();
    }

    
    public function Camisas(){
        $Allcamisas = array();
        $camisas = "Select * from Camisas";

            if($result = $this->conexion->query($camisas)){
                while($rows = $result->fetch_assoc()){
                    $Allcamisas[] = $rows;
                }
                return $Allcamisas;
            }
    }

    public function Camisa($camisa){
        $Camisa = array();
        $q = " Select * from Camisas Where Camisa = '$camisa' ";

            if($result = $this->conexion->query($q)){
                while($row = $result->fetch_assoc()){
                    $Camisa[] = $row;
                }
                return $Camisa;
            }
    }

}



?>