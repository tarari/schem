<?php


    namespace App\Controllers;

    use App\Infrastructure\Http\Response;
    use App\Domain\User\User;

    class HomeController{
        public function index(){
            $user=new User("1","Pep","pep@pep.com");
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