<?php

    namespace App;

    class RouteCollection{
        private array $routes=[];
        public function add(string $method,string $path,string $handler){
            $this->routes[]=[
                'method'=>strtoupper($method),
                'path'=>$path,
                'handler'=>$handler,
            ];

        }
        
        public function getRoutes():array{
            return $this->routes;
        }

        protected function loadFromFile(string $filePath){
            if(!file_exists($filePath)){
                throw new \Exception("Routes file not found: $filePath"); 
            }
            $routes = require $filePath;

            if(!is_array($routes)){
                 throw new \Exception("Routes file must be an array"); 
            }
            foreach($routes as $route){
                if(!isset($route['method'],$route['path'],$route['handler'])){
                    throw new \Exception("Invalid route format");
                }
                $this->add($route['method'],$route['path'],$route['handler']);
            }
        }
    }