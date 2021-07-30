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

                if( isset($camisa) ){

                    foreach ($camisa as $key => $value) {
                        
                            echo "Camisa : " .$camisa[$key]["Camisa"] . "<br>";
                            echo "Color : " .$camisa[$key]["Color"] . "<br>";
                            echo "Descripcion : " .$camisa[$key]["Descripcion"] . "<br>";
                            echo "Precio : " .$camisa[$key]["Precio"];
                        
                    }
                }
       
       ?>

</body>
</html>