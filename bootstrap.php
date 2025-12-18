<?php
    require __DIR__.'/vendor/autoload.php';

    use App\Infrastructure\Routing\Router;
    use App\Infrastructure\Routing\RouteCollection;
    

    $routes=new RouteCollection();

    $routes->loadFromFile(__DIR__.'/config/routes.php');
    
    $app=new Router($routes);