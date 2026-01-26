<?php

require __DIR__.'/../vendor/autoload.php';

use App\Domain\Book\Book;
use App\Domain\Book\BookId;
use App\Domain\Book\Title;


$book1=new Book(
    new BookId("book-1"),
    new Title("Clean code in Java")
);

$book2=new Book(
    new BookId("book-2"),
    new Title("DDD in PHP")
);

//dd($book1,$book2);

//caso de uso-1 Prestar libro
try{
    $book1->borrow();
    echo "Book {$book1->title()} borrowed succesfully!".PHP_EOL;
    $book2->borrow();
    echo "Book {$book2->title()} borrowed succesfully!".PHP_EOL;

}catch(DomainException $e){
    echo "Error:".$e->getMessage().PHP_EOL;
}
//caso de uso retorno -2
try{
    
    $book1->return();
    echo "Book {$book1->title()} returned successfully".PHP_EOL;
    dd($book1);
}catch(DomainException $e){
     echo "Error:".$e->getMessage().PHP_EOL;
}
