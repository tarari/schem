<?php

    namespace App;

    class Router{
        private RouteCollection $routeCollection;
        
        public function __construct(){

        }

        public function getCleanUri():string
        {
            $uri=$_SERVER['REQUEST_URI']??'/';
            dd($uri);
            return $uri===''?'/':$uri;
        }
    }