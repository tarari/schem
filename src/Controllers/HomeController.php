<?php


    namespace App\Controllers;

    use App\Infrastructure\Http\Response;
    use App\Domain\User\User;
use App\Domain\User\UserId;

    class HomeController{
        public function index(){
            $user=new User(new UserId('usu1'),'Pepe','pepe@gmail.com');
/*
            $response=new Response();
            $respJson=$response->json(['user'=>$user],200);
            $respJson->send();

*/
            //return view('home',['user'=>$user]);
            $response=new Response();
            $response->html('home',['user'=>$user]);
           // $response->send();
        }

        public function login(){
            echo 'login';
        }
    }