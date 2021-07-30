<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gorro</title>
</head>
<body>

       <?php 

                if( isset($gorro) ){

                    foreach ($gorro as $key => $value) {
                        
                            echo "Gorro : " .$gorro[$key]["Gorro"] . "<br>";
                            echo "Color : " .$gorro[$key]["Color"] . "<br>";
                            echo "Descripcion : " .$gorro[$key]["Descripcion"] . "<br>";
                            echo "Precio : " .$gorro[$key]["Precio"];
                        
                    }
                }
       
       ?>

</body>
</html>