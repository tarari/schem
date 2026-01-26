<?php
    namespace App\Domain\Book;

    class Book{
        private BookId $id;
        private string $title;
        private string $author;
        private bool $isBorrowed=false;

        
        public function setTitle(string $title):void
        {
            if(empty(trim($title))){
                throw new \InvalidArgumentException("Title cannot be empty");
            }
            $this->title = $title;

        }

        public function getId(){
            return $this->id;
        }

        public function borrow():void{
            if($this->isBorrowed){
                throw new \Exception("Book is already borrowed");
            }
            $this->isBorrowed=true;
        }

        public function return():void{
            $this->isBorrowed=false;
        }
        
    }