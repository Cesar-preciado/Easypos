<?php 

class Middleware{

    private $Modelprenda;


    public function __construct()
    {
        require 'Model/Prenda.php';
        $this->Modelprenda = new Prenda;
    }


    public function Prendas(){

        $prendas = $this->Modelprenda->Prendas();
        require_once 'Views/Prendas.php';
    }


    public function Prenda(){
        //echo $_GET["Prenda"];
       $prenda = $this->Modelprenda->Prenda($_GET['Prenda']);
        require_once 'Views/Prenda.php';
    }

    public function Queryprenda(){
        $query = $this->Modelprenda->Queryprenda($_GET["q"]);
        require_once 'Views/Prendas.php';
        //echo $_GET['q'];
    }

}

?>