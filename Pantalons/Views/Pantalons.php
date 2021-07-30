<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyPos</title>
</head>
<body>

    <div id="root">

            <h1>Welcome to EasyPos</div>
            <ul class="productos">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../Camisas/index.php">Camisas</a></li>
                <li><a href="index.php">Pantalones</a></li>
                <li><a href="../Gorros/index.php">Gorros</a></li>            
            </ul>

    <div class="search">
        <form method="get" action="../index.php">
            <input type="text" name="q" placeholder="Buscar prenda" title="Buscar prenda">
            <button type="submit" title="Buscar prenda">Buscar</button>
        </form>
    </div>
    
    <?php 

        if (isset($pantalons)){

            echo "<ul class='Pantalons'>";
                for($p = 0; $p < sizeof($pantalons); $p++){
                echo "<li><a href='Pantalon.php?Pantalon=".$pantalons[$p]["Pantalon"]."'>".$pantalons[$p]["Pantalon"]."</a></li>";
            }
                echo "</ul>";
        }

        ?>
    </div>
</body>
</html>