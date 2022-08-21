<?php

require_once '../negocio/BooksNegocio.php';
require_once '../modelo/Book.php';



class BooksController{


     function getAllBooks()
    {
         // print_r($_REQUEST['title']);
       $books = new BooksNegocio();
       return $books->findAllBooks();

       

    }

    function createBook(){
     $book= new Book();
     $pdBook= new BooksNegocio();
     $book->setNombre($_REQUEST['nombre']);
     $pdBook->addBooks($book); 
    }

    function editBook(){
     $book=new Book();
     $pdBook=new BooksNegocio();
     $book->setNombre($_REQUEST['nombreupdate']);
     $book->setId($_REQUEST['id']);
     $pdBook->editBooks($book);

     }

     function deleteBook(){
     $book=new Book();
     $pdBook=new BooksNegocio();
     $book->setId($_REQUEST['id']);
     $pdBook->deleteBook($book);     
     }


}

    

$book=new BooksController();
if (isset($_REQUEST['nombre'])) {
     $book->createBook();
}
if (isset($_REQUEST['nombreupdate'])) {
     $book->editBook();
}

if(isset($_REQUEST['id'])){
     $book->deleteBook();
}



?>