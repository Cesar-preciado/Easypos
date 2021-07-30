<?php 



class Prenda{

    private $conexion;



    public function __construct()
    {
        $this->conexion = DatabaseEasypos::Conexion();
    }


    public function Prendas(){

        $Prendas = array();

        $q = "select Camisa as Prendas, Color, Descripcion, Precio from Camisas 

        union all
        
        select Pantalon, Color, Descripcion, Precio from Pantalons
        
        union all
        
        select Gorro, Color, Descripcion, Precio from Gorros
              ";

            if($result = $this->conexion->query($q)){
                while($rows = $result->fetch_assoc()){
                    $Prendas[] = $rows;
                }

                return $Prendas;
            }
    }

    public function Prenda($prenda){

        $Prenda = array();

        $q = "select Camisa as Producto, Color, Descripcion, Precio from Camisas 
        where Camisa = '$prenda'
        union all
        
        select Pantalon, Color, Descripcion, Precio from Pantalons 
        where Pantalon = '$prenda'
        
        union all
        
        select Gorro, Color, Descripcion, Precio from Gorros
        where Gorro = '$prenda'
        ";

        if($result = $this->conexion->query($q)){
            while($rows = $result->fetch_assoc()){
                $Prenda[] = $rows;
            }
            return $Prenda;
        }
    }

    public function Queryprenda($q){

    $response = array();
        #Busquedad de prenda
        $query = "
        select Camisa as Prendas, Color, Descripcion, Precio from Camisas 
        where Camisa like '%$q%'
        union all
        select Pantalon, Color, Descripcion, Precio from Pantalons 
        where Pantalon like '%$q%'
        
        union all
        
        select Gorro, Color, Descripcion, Precio from Gorros
        where Gorro like '%$q%'
        ";

        if($result = $this->conexion->query($query)){
            while($rows = $result->fetch_assoc()){
                $response[] = $rows;
            }
            return $response;
        }
    }
}
























?>










