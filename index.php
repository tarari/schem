<?php

require __DIR__.'/vendor/autoload.php';

    use Dotenv\Dotenv;
    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    
    require __DIR__.'/bootstrap.php';

    use App\Infrastructure\Http\Request;
    
    $app->dispatch(new Request());
   