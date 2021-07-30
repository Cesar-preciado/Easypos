<?php


function LoadMiddleware($middleware){

    $filemiddleware = "Middleware/".$middleware.".php";

        if(!file_exists($filemiddleware)){
            $filemiddleware = "Middleware/".Middleware.".php";
        }

    require_once $filemiddleware;
    
    $middleware = new $middleware;
    return $middleware;
}

function LoadMethodaction($middleware, $action){

    if ( isset($action) && method_exists($middleware, $action) ){
        $middleware->$action();
    }else{
        $middleware->Gorros();
    }
}


?>