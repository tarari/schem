<?php
  require __DIR__.'/../vendor/autoload.php';

use App\Application\Services\BorrowBook\BorrowBookCommand;
use App\Application\Services\BorrowBook\BorrowBookHandler;
use App\Domain\Book\BookId;
use App\Domain\Book\Book;
use App\Domain\Book\Title;

use App\Infrastructure\Persistence\InMemory\InMemoryBookRepository;

  
    //sitio donde guarda
    $repository=new InMemoryBookRepository();
    //objeto a guardar
    $book= new Book(
        new BookId('b1'),
        new Title("DDD in PHP")
    );
    // guardo el libro
    $repository->save($book);
    //actor que lo ejecuta
    $handler=new BorrowBookHandler($repository);

    try{
        $handler->handle(new BorrowBookCommand('b1'));
        echo "Ok: book borrowed".PHP_EOL;
        
        $handler->handle(new BorrowBookCommand('b1'));

    }catch(\Throwable $th){
        echo "Error: ".$th->getMessage().PHP_EOL;
    }

