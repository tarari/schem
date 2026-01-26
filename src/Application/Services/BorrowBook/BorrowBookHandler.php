<?php
 namespace App\Application\Services\BorrowBook;

use App\Domain\Book\BookId;
use App\Domain\Book\IBookRepository;
use RuntimeException;

    final class BorrowBookHandler{
        public function __construct(private IBookRepository $repository)
        {

        }
        
        public function handle(BorrowBookCommand $command){
            //buscar book en repositorio
            // marcar que está prestado
            $book=$this->repository->find(
                new BookId($command->bookId)
            );
            
            if($book===null){
                throw new RuntimeException("Book not found");
            }
            $book->borrow();
            $this->repository->save($book);
            
        }

    }