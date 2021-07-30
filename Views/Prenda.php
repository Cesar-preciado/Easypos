<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>

       <?php 

                if( isset($prenda) ){

                    foreach ($prenda as $key => $value) {
                        
                            echo "Producto : " .$prenda[$key]["Producto"] . "<br>";
                            echo "Color : " .$prenda[$key]["Color"] . "<br>";
                            echo "Descripcion : " .$prenda[$key]["Descripcion"] . "<br>";
                            echo "Precio : " .$prenda[$key]["Precio"];
                        
                    }
                }
       
       ?>

</body>
</html>