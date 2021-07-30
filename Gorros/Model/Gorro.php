<?php 

#easy pos aplication tienda online realizada en php

class Gorro{

    private $conexion;

    public function __construct(){

        $this->conexion = DatabaseEasypos::Conexion();
    }

    
    public function Gorros(){
        $Allgorro = array();
        $gorros = "Select * from Gorros";

            if($result = $this->conexion->query($gorros)){
                while($rows = $result->fetch_assoc()){
                    $Allgorro[] = $rows;
                }
                return $Allgorro;
            }
    }

    public function Gorro($gorro){
        $Gorro = array();
        $q = " Select * from Gorros Where Gorro = '$gorro' ";

            if($result = $this->conexion->query($q)){
                while($row = $result->fetch_assoc()){
                    $Gorro[] = $row;
                }
                return $Gorro;
            }
    }

}



?>