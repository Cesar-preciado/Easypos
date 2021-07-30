<?php 


class Middleware{

    private $Modelpantalon;

    public function __construct()
    {
        
        require_once 'Model/Pantalon.php';
        $this->Modelpantalon = new Pantalon;

    }

    public function Pantalons(){

        $pantalons = $this->Modelpantalon->Pantalons();
        require_once 'Views/Pantalons.php';
    }

    public function Pantalon(){
        $pantalon = $this->Modelpantalon->Pantalon($_GET["Pantalon"]);
        require_once 'Views/Pantalon.php';
    }
}


?>