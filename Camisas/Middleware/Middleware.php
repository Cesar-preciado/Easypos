<?php 


class Middleware{

    private $Modelcamisa;

    public function __construct()
    {
        
        require_once 'Model/Camisa.php';
        $this->Modelcamisa = new Camisa;

    }

    public function Camisas(){

        $camisas = $this->Modelcamisa->Camisas();
        require_once 'Views/Camisas.php';
    }

    public function Camisa(){
        $camisa = $this->Modelcamisa->Camisa($_GET["Camisa"]);
        require_once 'Views/Camisa.php';
    }
}


?>