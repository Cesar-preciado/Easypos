<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/css/prenda.css">
    <title>Easy pos</title>
</head>
<body>

<div id="root">
    <?php include_once 'Components/Header.php'; ?>
        <div id="Prenda">
            <div class="Wrapper">
                <?php 

                    if( isset($prenda) ){

                        foreach($prenda as $key => $value ){

                            echo "
                                 
                                <div class='col-1'>
                                    <div class='poster'>
                                        <a href=''>
                                            <img src='src/assets/".$prenda[$key]["Img"]."' alt=''  title='".$prenda[$key]["Producto"]."' />
                                        </a>
                                    </div>
                                </div>
                                <div class='col-2'>
                                        <h3>Detalles del producto</h3>
                                        <ul class='Info-Prenda'>
                                            <li>Producto : ".$prenda[$key]["Producto"]."</li>
                                            <li>Color : ".$prenda[$key]["Color"]."</li>
                                            <li>Descripcion : ".$prenda[$key]["Descripcion"]."</li>
                                            <li>Precio : ".$prenda[$key]["Precio"]."</li>
                                        </ul>
                                </div>
                                ";
                        }
                    }
                
                ?>
            </div>

    <?php include_once 'Components/ListDesplegable.php'; ?>
        </div>
</div>

<script type="text/javascript" src="src/js/DetectorRoute.js"></script>
</body>
</html>       

