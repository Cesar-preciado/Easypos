<?php


include_once 'config/config.php';
include_once 'config/database.php';
include_once 'route/route.php';


$middleware = LoadMiddleware(Middleware);
LoadMethodaction($middleware, "Gorro");


?>