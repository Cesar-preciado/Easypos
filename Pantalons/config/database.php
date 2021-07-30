<?php 

class DatabaseEasypos{
    public static function Conexion(){
        $conexion = new Mysqli("127.0.0.1","root","Cesar_25","easypos");
        return $conexion;
    }
}

?>