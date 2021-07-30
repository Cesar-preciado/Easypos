<?php 

#easy pos aplication tienda online realizada en php

class Pantalon{

    private $conexion;

    public function __construct(){

        $this->conexion = DatabaseEasypos::Conexion();
    }

    
    public function Pantalons(){
        $Allpantalon = array();
        $pantalons = "Select * from Pantalons";

            if($result = $this->conexion->query($pantalons)){
                while($rows = $result->fetch_assoc()){
                    $Allpantalon[] = $rows;
                }
                return $Allpantalon;
            }
    }

    public function Pantalon($pantalon){
        $Pantalon = array();
        $q = " Select * from Pantalons Where Pantalon = '$pantalon' ";

            if($result = $this->conexion->query($q)){
                while($row = $result->fetch_assoc()){
                    $Pantalon[] = $row;
                }
                return $Pantalon;
            }
    }

}



?>