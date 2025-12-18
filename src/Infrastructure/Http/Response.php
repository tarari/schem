<?php
    namespace App\Infrastructure\Http;
    
    class Response{

        private int $statusCode;
        private array $headers=[];
        private mixed $body;

        public function __construct(mixed $body=null,int $statusCode = 200, array $headers=[]){
            $this->statusCode=$statusCode;
            $this->body=$body;
            $this->headers=$headers;
        }

        public function getHeaders()
        {
                return $this->headers;
        }

        public function setHeader(string $key, string $value){
            $this->headers[$key]=$value;
            return $this;

        }

        public function setHeaders($headers)
        {
                $this->headers = $headers;

                return $this;
        }
        public function json(array $data,int $status){
            return new self(json_encode($data),$status,['Content-Type'=>'application/json']);
        }
    }