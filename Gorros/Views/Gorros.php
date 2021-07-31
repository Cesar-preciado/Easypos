<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/style.css">
    <title>EasyPos</title>
</head>
<body>

    <div id="root">

    <header class="header">
        <h1>
            <a href="../index.php" title="EasyPos">EasyPos</a>
        </h1>
        <div id="MenuHamburguesa" onclick="OpenMenu()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class="wrapperSearch">
            <form method="get" action="../index.php">
                <input type="text" name="q" placeholder="Buscar prenda" title="Buscar prenda">
                <button type="submit" title="Buscar prenda">Buscar</button>
            </form>
        </div>
    </header>
    <div class="list">
        <div class="wrapperList">
        <?php 

            if (isset($gorros)){

                for($g = 0; $g < sizeof($gorros); $g++){

                echo "
                <div class='item'>
                    <div class='poster'>
                        <a href='Gorro.php?Gorro=".$gorros[$g]["Gorro"]."'>
                            <img src='../src/assets/".$gorros[$g]["Img"]."' alt='' title='".$gorros[$g]["Gorro"]."' />
                        </a>
                    </div>
                    <div class='poster-title'>
                        <div class='wrapper-descrip'>
                            <ul>
                                <li>".$gorros[$g]["Gorro"]."</li>
                                <li>".$gorros[$g]["Color"]."</li>
                                <li>".$gorros[$g]["Descripcion"]."</li>
                                <li>".$gorros[$g]["Precio"]."</li>
                            </ul>
                        </div>
                    </div>
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
                    <a href="../Camisas/index.php">Camisas</a></li>
                <li>
                    <img src="../src/assets/vaqueros.png"/>
                    <a href="../Pantalons/index.php">Pantalones</a></li>
                <li>
                    <img src="../src/assets/gorra.png"/>
                    <a href="index.php">Gorros</a></li>
            </ul>
        </div>
        <div class="ListMovil">
            <ul class="MenuDeskopt">
            <li>
                    <img src="../src/assets/home.png"/>
                    <a href="../index.php">Inicio</a>
                </li>
                <li>
                    <img src="../src/assets/camisa.png"/>
                    <a href="../Camisas/index.php">Camisas</a></li>
                <li>

                    <img src="../src/assets/vaqueros.png"/>
                    <a href="../Pantalons/index.php">Pantalones</a></li>
                <li>
                  <img src="../src/assets/gorra.png"/>
                    <a href="index.php">Gorros</a></li>
            </ul>
        </div>
    </div>
    </div>

<script type="text/javascript" src="../src/js/DetectorRoute.js"></script>
<script type="text/javascript" src="../src/js/Menu.js"></script>
</body>
</html>
