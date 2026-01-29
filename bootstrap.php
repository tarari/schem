<?php
   

    require 'config/constants.php';
    $entityManager=require 'config/doctrine.php';
    $em=$entityManager;
   
    //route definition
    use App\Infrastructure\Routing\Router;
    use App\Infrastructure\Routing\RouteCollection;
    
    $routes=new RouteCollection();

    $routes->loadFromFile(__DIR__.'/config/routes.php');
    // launch app
    $app=new Router($routes);