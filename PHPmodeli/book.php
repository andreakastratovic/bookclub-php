<?php
require "dbBroker.php"; 

class Book{
    public $bookid;
    public $name;
    public $author;


    public function __construct($bookid=null,$name=null,$author=null){
        $this->bookid = $bookid;
        $this->name = $name;
        $this->author = $author;
    }

    public static function getAllBooks(mysqli $conn){
        $q = "SELECT * FROM books";
        return $conn->query($q);    
    }

    
    public static function addBook($book, mysqli $conn){
        $q="INSERT INTO books (bookid,name,author) VALUES ($bookid,$name, $author)";
    }

    public static function deleteBook(mysqli $conn){
        $q = "DELETE FROM books WHERE " .$bookid;
    }


}




?>