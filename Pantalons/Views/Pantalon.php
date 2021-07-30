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

                if( isset($pantalon) ){

                    foreach ($pantalon as $key => $value) {
                        
                            echo "Pantalon : " .$pantalon[$key]["Pantalon"] . "<br>";
                            echo "Color : " .$pantalon[$key]["Color"] . "<br>";
                            echo "Descripcion : " .$pantalon[$key]["Descripcion"] . "<br>";
                            echo "Precio : " .$pantalon[$key]["Precio"];
                        
                    }
                }
       
       ?>

</body>
</html>