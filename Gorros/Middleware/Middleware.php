<?php 


class Middleware{

    private $Modelgorro;

    public function __construct()
    {
        
        require_once 'Model/Gorro.php';
        $this->Modelgorro = new Gorro;

    }

    public function Gorros(){

        $gorros = $this->Modelgorro->Gorros();
        require_once 'Views/Gorros.php';
    }

    public function Gorro(){
        $gorro = $this->Modelgorro->Gorro($_GET["Gorro"]);
        require_once 'Views/Gorro.php';
    }
}


?>