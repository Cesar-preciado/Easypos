<?php 

include_once 'config/config.php';
include_once 'config/database.php';
include_once 'route/route.php';

if( isset($_GET["q"] ) ){

    $middleware = LoadMiddleware(Middleware);
    LoadMethod($middleware, "Queryprenda");

}else{


    $middleware = LoadMiddleware(Middleware);
    LoadMethod($middleware, "Prendas");

}

?>