<?php

use App\Controllers\HomeController;

    return [
        [
            'method'=>'GET',
            'path'=>'/',
            'handler'=>[HomeController::class,'index']
        ],
        [
            'method'=>'GET',
            'path'=>'/login',
            'handler'=>[HomeController::class,'login']
        ]
    ];