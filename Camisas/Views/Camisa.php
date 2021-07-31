<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../src/css/style.css">
    <link rel="stylesheet" type="text/css" href="../src/css/prenda.css">
    <title>Easy pos</title>
</head>
<body>

<div id="root">
<header class="header">
        <h1>EasyPos</h1>
        <div id="MenuHamburguesa">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="wrapperSearch">
            <form method="get" action="../index.php">
                <input type="text" name="q" placeholder="Buscar prenda" title="Buscar prenda">
                <button type="submit" title="Buscar prenda">Buscar</button>
            </form>
        </div>
    </header>
        <div id="Prenda">
            <div class="Wrapper">
                <?php 

                    if( isset($camisa) ){

                        foreach($camisa as $key => $value ){

                            echo "
                                 
                                <div class='col-1'>
                                    <div class='poster'>
                                        <a href=''>
                                            <img src='../src/assets/".$camisa[$key]["Img"]."' alt=''  title='".$camisa[$key]["Camisa"]."' />
                                        </a>
                                    </div>
                                </div>
                                <div class='col-2'>
                                        <h3>Detalles del producto</h3>
                                        <ul class='Info-Prenda'>
                                            <li>Producto : ".$camisa[$key]["Camisa"]."</li>
                                            <li>Color : ".$camisa[$key]["Color"]."</li>
                                            <li>Descripcion : ".$camisa[$key]["Descripcion"]."</li>
                                            <li>Precio : ".$camisa[$key]["Precio"]."</li>
                                        </ul>
                                </div>
                                ";
                        }
                    }
                
                ?>
            </div>
            <div class="ListDespegable">
            <ul class="MenuDeskopt">

                <li>
                    <img src="../src/assets/home.png"/>
                    <a href="../index.php">Inicio</a>
                </li>
                <li>
                    <img src="../src/assets/camisa.png"/>
                    <a href="index.php">Camisas</a></li>
                <li>

                    <img src="../src/assets/vaqueros.png"/>
                    <a href="../Pantalons/index.php">Pantalones</a></li>
                <li>
                  <img src="../src/assets/gorra.png"/>
                    <a href="../Gorros/index.php">Gorros</a></li>
            </ul>
        </div>
        </div>
</div>

<script type="text/javascript" src="../src/js/DetectorRoute.js"></script>
</body>
</html>       